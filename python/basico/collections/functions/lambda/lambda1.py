# Também chamadas de funções anônimas, vazias ou reduzidas

def sum(x: int, y: int) -> int:
    return x + y

# lambda
lsum = lambda x, y: x + y

print(sum(1, 2))
print(lsum(1, 2))