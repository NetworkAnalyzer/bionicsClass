# -*- coding: utf-8 -*-
INIT_VAL = 1.5
LEARNING_RATE = 0.3
ITERATION_LIMIT = 10000
END_CONDITION = 0.0000001

def function_prime(x):
    return (x**2 - 2)**2

def main():
    
    x = INIT_VAL
    print('Init\t:' + str(x))
    print('lr\t:' + str(LEARNING_RATE))
    print('--------------------------')

    for i in range(0, ITERATION_LIMIT):
        x_new = x - LEARNING_RATE * function_prime(x)

        if (i%100 == 0):
            print(str(i) + '\t:' + str(x_new))

        error = abs(x - x_new)
        if error < END_CONDITION:
            break

        x = x_new
    
if __name__ == "__main__":
    main()