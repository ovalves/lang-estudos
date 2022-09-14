import collections

Card = collections.namedtuple('Card', ['rank', 'suit'])

class FrenchDeck:
    ranks = [str(n) for n in range(2, 11)] + list('JQKA')
    suits = 'spades diamonds clubs hearts'.split()

    def __init__(self):
        self._cards = [Card(rank, suit) for suit in self.suits
                                        for rank in self.ranks]

    def __len__(self):
        return len(self._cards)

    def __getitem__(self, position):
        return self._cards[position]

if __name__ == '__main__':
    card = Card('7', 'diamonds')
    deck = FrenchDeck()

    print(card)
    print(deck)

    """
    Chama o método "mágico" __len__ da classe FrenchDeck
    """
    print(len(deck))

    """
    Pode-se utilizar o fatiamento já que a classe FrenchDeck implementa o __getitem__
    """
    print(deck[:3])

    """
    Pode-se utilizar o contains já que a classe FrenchDeck implementa o __getitem__
    """
    print(Card('Q', 'hearts') in deck)

    """
    Pode-se usar iteração nos elementos da classe já que a classe FrenchDeck implementa o __getitem__
    """
    for card in deck:
        print(card)

    for card in reversed(deck):
        print(card)

    for n, card in enumerate(deck, 1):
        print(n, card)

    """Podemos ordenarar os elementos da classe já que a classe FrenchDeck implementa o __getitem__
    """
    suit_values = dict(spades=3, hearts=2, diamonds=1, clubs=0)
    def spades_high(card):
        rank_value = FrenchDeck.ranks.index(card.rank)
        return rank_value * len(suit_values) + suit_values[card.suit]

    print(spades_high(Card('7', 'diamonds')))

    for card in sorted(deck, key=spades_high):
        print(card)
