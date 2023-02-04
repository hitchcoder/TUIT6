from cmath import cos, log, pi, sqrt
from math import sin, tan
import numbers
from re import S
from unicodedata import name
import matplotlib.pyplot as plt
import numpy as np
 

# print('hello world')

# name=input("What's your name?")
# print(name)

# a=input('a=')
# b=input('b=')
# c=input('c=')

# print(min(a,b,c))

# n = int(input('amout of numbers:'));
# numbers = []
# for i in range(n):
#     numbers.append(int(input('Enter number:')))
# print(min(numbers))





x = np.arange(-11, 11, 1)
a = int(input('a='))

if x<=-3:
    y = pi * x^4 + a*x
elif x>-3 and x<=1:
    y = log(x) + cos(tan(sqrt(x)))
elif x>1:
    y = sin(a+sqrt(x))

print('Values of x: ', x)
print('Values of y: ', y)
plt.plot(x, y)
plt.title("Quadratic Function")
plt.xlabel("Values of x")
plt.ylabel("Values of y")
plt.show()