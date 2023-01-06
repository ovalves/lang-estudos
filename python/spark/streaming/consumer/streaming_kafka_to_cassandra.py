from pyspark.sql import SparkSession
from pyspark.sql.types import StructType,StructField,FloatType,IntegerType
from pyspark.sql.functions import from_json,col

odometrySchema = StructType([
                StructField("id",IntegerType(),False)
            ])

spark = SparkSession \
    .builder \
    .appName("SparkStructuredStreaming") \
    .config("spark.cassandra.connection.host","host.docker.internal")\
    .config("spark.cassandra.connection.port","9042")\
    .config("spark.cassandra.auth.username","cassandra")\
    .config("spark.cassandra.auth.password","cassandra")\
    .config("spark.driver.host", "localhost")\
    .getOrCreate()

spark.sparkContext.setLogLevel("ERROR")


df = spark \
  .readStream \
  .format("kafka") \
  .option("kafka.bootstrap.servers", "host.docker.internal:9092") \
  .option("subscribe", "tweet_messages") \
  .option("delimeter",",") \
  .option("startingOffsets", "earliest") \
  .load()

df.printSchema()

df1 = df.selectExpr("CAST(value AS STRING)").select(from_json(col("value"),odometrySchema).alias("data")).select("data.*")
df1.printSchema()


def writeToCassandra(writeDF, _):
  writeDF.write \
    .format("org.apache.spark.sql.cassandra")\
    .mode('append')\
    .options(table="tweets", keyspace="tweet_messages")\
    .save()

df1.writeStream \
    .foreachBatch(writeToCassandra) \
    .outputMode("update") \
    .start()\
    .awaitTermination()
df1.show()