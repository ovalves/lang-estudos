from dataclasses import dataclass


class WithoutSlots:
    prop1: str
    prop2: int

    def __init__(self, prop1, prop2):
        self.prop1 = prop1
        self.prop2 = prop2

class WithSlots:
    __slots__ = ['prop1', 'prop2']

    def __init__(self, prop1, prop2):
        self.prop1 = prop1
        self.prop2 = prop2

if __name__ == "__main__":
    """
    Sem os Slots o python faz alocação dinâmica das propriedade através de um DICT
    """
    without_slots = WithoutSlots('Sem Slots', 1)
    print(without_slots.__dict__)
    # {'prop1': 'Sem Slots', 'prop2': 1}

    without_slots.new_prop = 'Nova Propriedade na classe SEM Slots'
    print(without_slots.__dict__)
    # {'prop1': 'Sem Slots', 'prop2': 1, 'new_prop': 'Nova Propriedade'}

    """
    Com os Slots não é mais possível adicionar propriedades dinamicamente
    """
    with_slots = WithSlots('Com Slots', 1)
    with_slots.new_prop = 'Nova Propriedade na classe COM Slots'
    # AttributeError: 'WithSlots' object has no attribute 'new_prop'