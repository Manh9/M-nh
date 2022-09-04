#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

void main(int argc, char *argv[]) 
{
	int num1, num2, res;
	char op;
	num1 = 90;
	num2 = 33;
	op = '-';
	clrscr();
	switch (op)
	{
	 case '+':
	 res = num1 + num2;
	 printf("\n the sum is: %d", res);
	 break;
	 case '-':
	 res = num1 - num2;
	 printf("\n number after subtraction: %d", res);
	 break;
	 case '/':
	 res = num1 / num2;
	 printf("\n nnumber after division: %d", res);
	 break;
	 case '*':
	 res = num1 * num2;
	 printf("\n nnumber after multiplication: %d", res);
	 break;
	 default:
	 printf("\n invalid");
	 break;
	}
}
