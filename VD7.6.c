#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

void main(int argc, char *argv[]) 
{
	int x, y;
	x = y = 0;
	clrscr();
	printf("enter choice (1 - 3):");
	scanf("%d", &x);
	if(x == 1)
	{
	 printf("\n enter value for y (1 - 5):");
	 scanf("%d", &y);
	 if(y <= 5)
	 printf("\n the value for y is: %d", y);
	 else
	 printf("\n the value of y exceeds 5");
	}
	else
	printf("\n choice entered war not 1");
}
