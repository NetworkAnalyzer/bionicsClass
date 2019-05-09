# -*- coding: utf-8 -*-
INIT_VAL = 2
LEARNING_RATE = 0.01
ITERATION = 1000
END_CONDITION = 0.00001

def function_prime(x):
    return 2 * x

def main():
    
    x = INIT_VAL
    x_history = [x]

    for _ in range(0, ITERATION):
        x_new = x - LEARNING_RATE * function_prime(x)
        print(x_new)

        error = abs(x - x_new)
        print('error:', error)
        if error < END_CONDITION:
            break

        x = x_new
        x_history.append(x_new)
    
    print(x_history)

if __name__ == "__main__":
    main()