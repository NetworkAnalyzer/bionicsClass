# -*- coding: utf-8 -*-

def function(x):
    return 2 - x**2

def function_prime(x):
    return -2 * x

def should_exit(e):
    return e < 0.01

def main(x_init, learning_rate):
    
    x = x_init
    x_history = [x]

    while(1):
        x_new = x - learning_rate * function_prime(x)
        x_history.append = x_new

        if should_exit(abs(x - x_new)):
            exit()

def if __name__ == "__main__":
    main(0.1, 0.1)