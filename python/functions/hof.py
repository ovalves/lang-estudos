def somar(a, b):
    return a + b

def subtrair(a, b):
    return a - b

def multiplicar(a, b):
    return a * b

def dividir(a, b):
    return a / b

def calcular(a, b, fn):
    return fn(a, b)

print(calcular(10, 2, somar))
print(calcular(10, 2, subtrair))
print(calcular(10, 2, multiplicar))
print(calcular(10, 2, dividir))