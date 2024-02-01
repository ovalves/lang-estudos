/*
    ❯ cat _files/non-flowing-stream.txt| node flowing-stream.js
    New data available
    Chunk read (18 bytes): "apenas um teste..."
    End of stream
*/

process.stdin
    .on("data", (chunk) => {
        console.log("New data available");
        console.log(
            `Chunk read (${chunk.length} bytes): "${chunk.toString()}"`
        );
    })
    .on("end", () => console.log("End of stream"));
