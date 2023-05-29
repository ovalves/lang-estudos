# Dados gerados com muitos elementos tem impacto sobre a memória
import sys

small = list(range(101))
big = list(range(1000001))

print('Tamanho em bytes:', sys.getsizeof(small))
print('Tamanho em bytes:', sys.getsizeof(big))

# Checando o tipo generator
labels = [
    'A',
    'B',
    'C',
    'D',
]

gen = (label[0] == 'A' for label in labels)
print(any(label[0] == 'A' for label in labels))
print(type(gen))
print(tuple(gen))