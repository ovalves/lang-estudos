import { promises as fs } from "fs";
import { gzip } from "zlib";
import { promisify } from "util";
const gzipPromise = promisify(gzip);
const filename = process.argv[2];

async function gzipFile() {
    const data = await fs.readFile(filename);
    const gzippedData = await gzipPromise(data);
    await fs.writeFile(`${filename}.gz`, gzippedData);
    console.log("File successfully compressed");
}

gzipFile();

// node gzip-buffer.js <path to file>