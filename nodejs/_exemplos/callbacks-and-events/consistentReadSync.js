import { readFileSync } from "fs";

const cache = new Map();

function consistentReadSync(filename) {
    if (cache.has(filename)) {
        return cache.get(filename);
    } else {
        const data = readFileSync(filename, "utf8");
        cache.set(filename, data);
        return data;
    }
}

const reader1 = consistentReadSync("data.txt");
console.log(`First call data: ${reader1}`);

const reader2 = consistentReadSync("data.txt");
console.log(`Second call data: ${reader2}`);
