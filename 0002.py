# -*- coding: utf-8 -*-

"""
http://judge.u-aizu.ac.jp/onlinejudge/description.jsp?id=0002
"""

while True:
    try:
        a, b = raw_input().split()
        #print a, b
        print len(str(int(a)+int(b)))
    except EOFError:
        break
