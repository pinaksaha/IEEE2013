import os
import sys

operator = { '+':'ADD','-':'SUB','&':'AND','|':'OR','~':'NOT', 'X':'XOR'}
allNumbers = {'0':0,'1':1, '2':2, '3':3, '4':4, '5':5, '6':6, '7':7, '8':8, '9':9, 'A':10, 'B':11, 'C':12, 'D':13, 'E':14, 'F':15}



def isOperator(arg):
	if(operator[arg]):
		return True
	else:
		return False



def ADD(ag1,argv):

	#Add two values

	return hex(int(allNumbers[arg1], 16) + int(allNumbers[arg2], 16)) 

def process():

	values = []
	for i in range(1,len(sys.argv)):
		if(not isOperator(sys.argv[i])):
			values.append(sys.argv[i])
		else:
			if(len(values) < 2):
				print "ERROR"
			else:
				if(operator[sys.argv[i]] == 'ADD'):
					print ADD(values[0],values[1])



def main():
	#print sys.argv[1]
	#print operator['+'];
	process
main()

