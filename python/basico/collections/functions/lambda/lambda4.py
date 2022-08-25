cars = [
    'Car B',
    'Car C',
    'Car A',
    'Car D',
]

print(f"Original -> {cars}")
cars.sort(key=lambda car: car.split(' ')[-1])
print(f"Sorted -> {cars}")