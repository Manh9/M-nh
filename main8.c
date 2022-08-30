#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

int main(int argc, char *argv[])
 {
 	int i,a,b,c,d;
 	int r1,r2,r3;
 	printf("test r1 = ++i %% 7\n");
 	printf("i = ");
 	scan("%d", &i);
 	r1 = ++i % 7;
 	printf("r1 = ++i %% 7 + %d\n", r1);
 	printf("test r2 = 5 * (c - 3 + d)\n");
 	printf("c = ");
 	scanf("%d", &c);
 	printf("d = ");
 	scanf("%d", &d);
 	r2 = 5 * (c - 3 + d);
 	printf("result r2 = 5 * (c - 3 + d) = %d\n", r2);
 	printf("test r3 = a * (b = c/d) - 22\n");
 	printf("a = ");
 	scanf("%d", &a);
 	printf("b = ");
 	scanf("%d", &b);
 	printf("c =");
 	scanf("%d", &c);
 	printf("d = ");
 	scanf("%d", &d);
 	r3 = a * (b + c/d) - 22;
 	printf("result r3 = a * (b + c/d) - 22 = %d\n", r3);
	return 0;
}
