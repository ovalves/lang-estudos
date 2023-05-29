from functools import wraps
from time import sleep


def retry(retries):
    def function_reference(decorated):
        @wraps(decorated)
        def wrapped(*args, **kwargs):
            current = 1
            while True:
                try:
                    return decorated(*args, **kwargs)
                except Exception as exception:
                    current += 1
                    if current > retries:
                        raise Exception(str(exception)) from exception
                    sleep(1)
        return wrapped
    return function_reference

@retry(5)
def say():
    print('Seja bem vindo.')

say()