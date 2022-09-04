#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

void main(int argc, char *argv[]) 
{
	float com = 0, sales_amt;
	clrscr();
	printf("enter the sales amount:");
	scanf("%f", &sales_amt);
	if(sales_amt >= 10000)
	com = sales_amt * 0.1;
	printf("\n commission = %f", com);
}
