from functools import wraps

def cast_to_type(*types):
    def function_reference(decorated):
        @wraps(decorated)
        def wrapped(*args, **kwargs):
            __args = []
            for (__val, __type) in zip(args, types):
                __args.append(__type(__val))
            return decorated(*__args, **kwargs)
        return wrapped
    return function_reference

@cast_to_type(str, int)
def repeat_message(message, times):
    for _ in range(times):
        print(message)

@cast_to_type(float, float)
def divide(a, b):
    print(a / b)

"""
Tests
"""
repeat_message('Hello, world', '5')
divide('1', 5)