#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

void main(int argc, char *argv[]) 
{
	char letter;
	printf("\n please enter any character :");
	letter = getchar();
	printf("\n the character entered by you is %c .", letter);
}
