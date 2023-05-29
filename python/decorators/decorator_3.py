from functools import wraps

def say_n_times(retries):
    def function_reference(decorated):
        @wraps(decorated)
        def wrapped(*args, **kwargs):
            current = 1
            while current <= retries:
                try:
                    current += 1
                    decorated(*args, **kwargs)
                except Exception as exception:
                    raise Exception(str(exception)) from exception
        return wrapped
    return function_reference

@say_n_times(5)
def say():
    print('Seja bem vindo.')

say()