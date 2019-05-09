# -*- coding: utf-8 -*-
END_CONDITION = 0.00001

def function_prime(x):
    return 2 * x

def main(x_init, learning_rate):
    
    x = x_init
    x_history = [x]

    for _ in range(0, 100):
        x_new = x - learning_rate * function_prime(x)
        print(x_new)

        error = abs(x - x_new)
        print('error:', error)
        if error < END_CONDITION:
            break

        x = x_new
        x_history.append(x_new)
    
    print(x_history)

if __name__ == "__main__":
    main(1, 0.01)