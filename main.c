#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

int main(void)
 {
	int a; 
	int b;
	int sum;
	
	printf("enter first intteger\n") ;
	scanf("%d" , &a ) ;
	
	printf("enter second integer\n") ;
	scanf("%d" , &b) ;
	
	sum = a + b;
	printf("sum is %d\n", sum);
	return 0;
}
