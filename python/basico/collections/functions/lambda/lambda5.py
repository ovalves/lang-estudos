def generator_quad_fn(a:int, b: int, c: int):
    return lambda x: a * x ** 2 + b * x + c

calc = generator_quad_fn(2, 3, -5)
print(calc(0))
print(calc(1))
print(calc(2))
print(generator_quad_fn(3, 0 , 1)(2))