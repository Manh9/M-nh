#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

void main(int argc, char *argv[]) 
{
	int num1, num2;
	num1 = 77;
	num2 = 90;
	if(num1 == num2)
	printf("\n the numbers are equal");
	else if (num1 < num2)
	printf("\n tthe larger number is: %d, num2");
	else
	printf("\n the larger number is: %d, num1");
}
