#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

    main(int argc, char *argv[]) 
{
	int x;
	x = 0;
	clrscr();
	
	printf("enter choice (1 - 3):");
	scanf("%d", &x);
	
	if(x == 1)
	printf("\n choice is 1");
	else if (x == 2)
	printf("\n choice is 2");
	else if (x == 3)
	printf("\n choice is 3");
	else
	printf("\n invalid choice: invalid choice");
}
