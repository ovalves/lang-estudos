const cluster = require('cluster');
const os = require('os');
const cpus = os.cpus();

console.log(`CPUS: ${cpus.length}`);
console.log("Exec Thread");

if (cluster.isMaster) {
    console.log("Thread Master");
    cpus.forEach(() => {
        cluster.fork();
    });

    cluster.on('listening', worker => {
        console.log(`Cluster conectado ${worker.process.pid}`);
    });

    cluster.on('exit', worker => {
        console.log("Cluster %d desconectado", worker.process.pid);
        cluster.fork();
    });

} else {
    console.log("Thread Slave");
}