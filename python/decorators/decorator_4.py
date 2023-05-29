from functools import wraps

def validate_first_param(first_param):
    def function_reference(decorated):
        @wraps(decorated)
        def wrapped(*args, **kwargs):
            if args and args[0] != first_param:
                return f'Primeiro parâmetro deve ser {first_param}'
            return decorated(args)
        return wrapped
    return function_reference

@validate_first_param('python')
def langs(*args):
    return f'linguagens mais utilizadas {args}'

print(langs('python', 'php', 'go'))