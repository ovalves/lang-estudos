export enum LogExecutionType {
    'SEC' = 0,
    'MIL' = 0,
}

export function logExecutionTime(format?: LogExecutionType) {
    return (
        target: any,
        propertyKey: string,
        descriptor: PropertyDescriptor,
    ) => {
        const fn = descriptor.value;
        descriptor.value = function(...args: any[]) {
            let div = 1;
            let unit = 'milisegundos';
            if (LogExecutionType.SEC === format) {
                div = 1000;
                unit = 'segundos';
            }
            const t1 = performance.now();
            const fnApplied = fn.apply(this, args);
            const t2 = performance.now();
            console.log(`${propertyKey}, tempo de execução: ${(t2 - t1)/div} ${unit}`);
            fnApplied
        };

        return descriptor;
    }
}