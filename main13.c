#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

void main(int argc, char *argv[])
 {
 	printf("a string in various forms :\n");
	 printf("without any format command :\n");
	 printf("good day mr. lee. \n");
	 printf("with format command but without any modifier :\n");
	 printf("[%s]\n","good day mr. lee.");
	 printf("with digit string 4 as modifier :\n");
	 printf("[%4s]\n","good day mr. lee.");
	 printf("with digit string 19 as modifier :\n");
	 printf("[%19s]/n","good day mr. lee.");
	 printf("with digit string 23 as modifier :\n");
	 printf("[%23s]\n","good day mr. lee.");
	 printf("with digit string 25.4 as modifier :\n");
	 printf("[%25.4s]\n","good day mr. lee.");
	 printf("with - and digit string 25.4 as modifiers :\n");
	 printf("{%-25.4s]\n","good day mr.shorff.");
}
