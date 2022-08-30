#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

void main(int argc, char *argv[]) 
{
	int breadth;
	float length, height;
	scanf("%d %f %6.2f", breadth, &length, height);
	printf("%d %f %e", &breadth, length, height);
}
