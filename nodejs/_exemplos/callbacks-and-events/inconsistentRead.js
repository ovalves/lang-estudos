import { readFile } from "fs";

const cache = new Map();

function inconsistentRead(filename, cb) {
    if (cache.has(filename)) {
        // invoked synchronously
        cb(cache.get(filename));
    } else {
        // asynchronous function
        readFile(filename, "utf8", (err, data) => {
            cache.set(filename, data);
            cb(data);
        });
    }
}

function createFileReader(filename) {
    const listeners = [];
    inconsistentRead(filename, (value) => {
        listeners.forEach((listener) => listener(value));
    });
    return {
        onDataReady: (listener) => listeners.push(listener),
    };
}

const reader1 = createFileReader("data.txt");
reader1.onDataReady((data) => {
    console.log(`First call data: ${data}`);

    // ...sometime later we try to read again from
    // the same file

    const reader2 = createFileReader("data.txt");
    reader2.onDataReady((data) => {
        console.log(`Second call data: ${data}`);
    });
});
