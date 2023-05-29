from random import choice

def say(person):
    def hello():
        return choice((
            'Bom dia ', 'Bom dia meu patrão ', 'Bom dia meu guerreiro ', 'oi '
        ))
    return hello() + person

print(say('Peter Parker'))


def greeting(person):
    def hello():
        return choice((
            f'Bom dia {person}',
            f'Bom dia meu patrão {person}',
            f'Bom dia meu guerreiro {person}',
            f'oi {person}'
        ))
    return hello()

print(greeting('Peter Parker'))