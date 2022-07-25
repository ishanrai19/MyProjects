import random
def game(comp, you):
    if comp == you:
        print("It's a Tie.")
    elif you == 's':
        if comp == 'w':
            print("You win!")
        elif comp == "g":
            print("You lost :(")
    elif you == 'w':
        if comp == 'g':
            print("You win!")
        elif comp == "s":
            print("You lost :(")
    elif you == 'g':
        if comp == 's':
            print("You win!")
        elif comp == "w":
            print("You lost :(")


print('''Computer's turn''')
random_number = random.randint(1, 3)
if random_number == 1:
    comp = 's'
elif random_number == 2:
    comp = 'w'
elif random_number == 3:
    comp = 'g'
you = input('''Your turn enter (s) for Snake\n(w) for Water\nand (g) for Gun:''')

print(f"You chose {you} and computer chose {comp}")

game(comp, you)
