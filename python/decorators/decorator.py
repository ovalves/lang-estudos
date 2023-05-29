def greeting(fn):
    def hello():
        print('Olá ')
        fn()
        print('Tenha um bom dia ')
    return hello

@greeting
def say():
    print('Seja bem vindo.')

say()