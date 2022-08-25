# Verificando o uso de memória na geração de listas
from sys import getsizeof

list_comp = getsizeof([x * 10 for x in range(1000)])
set_comp = getsizeof({x * 10 for x in range(1000)})
dict_comp = getsizeof({x: x * 10 for x in range(1000)})
gen_comp = getsizeof(x * 10 for x in range(1000))

print("List Comprehension in bytes: %s" % list_comp)
print("Set Comprehension in bytes: %s" % set_comp)
print("Dict Comprehension in bytes: %s" % dict_comp)
print("Generator Expression in bytes: %s" % gen_comp)
