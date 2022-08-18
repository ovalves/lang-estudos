const fs = require('fs');
const arquivo = process.argv[2];

fs.createReadStream(arquivo)
    .pipe(fs.createWriteStream('test2.txt'))
    .on('finish', () => {
        console.log('escrevendo no arquivo arquivo: test2.txt');
    });