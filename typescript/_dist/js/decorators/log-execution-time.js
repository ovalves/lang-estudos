export var LogExecutionType;
(function (LogExecutionType) {
    LogExecutionType[LogExecutionType["SEC"] = 0] = "SEC";
    LogExecutionType[LogExecutionType["MIL"] = 0] = "MIL";
})(LogExecutionType || (LogExecutionType = {}));
export function logExecutionTime(format) {
    return (target, propertyKey, descriptor) => {
        const fn = descriptor.value;
        descriptor.value = function (...args) {
            let div = 1;
            let unit = 'milisegundos';
            if (LogExecutionType.SEC === format) {
                div = 1000;
                unit = 'segundos';
            }
            const t1 = performance.now();
            const fnApplied = fn.apply(this, args);
            const t2 = performance.now();
            console.log(`${propertyKey}, tempo de execução: ${(t2 - t1) / div} ${unit}`);
            fnApplied;
        };
        return descriptor;
    };
}
//# sourceMappingURL=log-execution-time.js.map