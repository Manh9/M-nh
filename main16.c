#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

void main(int argc, char *argv[]) 
{
	int a;
	float d;
	char ch, name[40];
	printf("please enter the data\n");
	scanf("%d %f %c %s", &a, &d, &ch, name);
	printf("\n the values accepted are : %d, %f, %c, %s", a, d, ch, name);
}
