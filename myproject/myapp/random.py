import random2 as random
import string


def randomstrnum(a):
    letters_and_digits = string.ascii_letters + string.digits
    r_result = ''.join((random.choice(letters_and_digits)
                        for i in range(a)))
    print(r_result)


randomstrnum(10)
