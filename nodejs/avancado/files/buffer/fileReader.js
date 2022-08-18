const fs = require('fs');
const arquivo = process.argv[2];

fs.readFile(arquivo, (err, buffer) => {
    console.log(`lendo o arquivo ${arquivo}`);

    fs.writeFile('test2.txt' , buffer, (err) => {
        console.log('escrevendo no arquivo arquivo: test2.txt');
    });
});