/*
    ❯ cat _files/non-flowing-stream.txt| node non-flowing-stream.js
    New data available
    Chunk read (15 bytes): "apenas um teste"
    New data available
    End of stream
*/

process.stdin
    .on("readable", () => {
        let chunk;
        console.log("New data available");
        while ((chunk = process.stdin.read()) !== null) {
            console.log(
                `Chunk read (${chunk.length} bytes): "${chunk.toString()}"`
            );
        }
    })
    .on("end", () => console.log("End of stream"));
