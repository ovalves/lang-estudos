# Muito utilizado como método de redução e otimização de código

# A estrutura:
def say():
    return 'Olá Mundo!!!'

msg = say()
print(msg)


# Pode ser reduzida para:
msg2 = lambda: 'Olá Mundo!!!'
print(msg2())