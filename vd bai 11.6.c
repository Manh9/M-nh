#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

void main(int argc, char *argv[]) 
{
	int i, n = 0;
	int item;
	char x[10] [12];
	char temp[12];
	printf("enter each string on a separate line \n\n");
	printf("type 'END' when over \n\n");
	do
	{
		printf("string %d:", n + 1);
		scanf("%s", x[n]);
	} while (strcmp(x[n++], "END"));
	n = n - 1;
	for(item = 0; item < n - 1; ++item)
	   {
	   	for(i = item + 1; i < n; ++i)
	   	   {
	   	   	 if(strcmp(x[item], x[i]) > 0)
	   	   	 {
	   	   	 	strcpy(temp, x[item]);
	   	   	 	strcpy(x[item], x[i]);
	   	   	 	strcpy(x[i], temp);
			 }
		   }
	   }
	printf("\n recorded list of strings:");
	for(i = 0; i < n; ++i)
	{
		printf("\n string %d is %s", i + 1, x[i]);
	}
}
