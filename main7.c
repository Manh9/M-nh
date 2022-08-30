#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

int main(int argc, char *argv[])
 {
	int a , b , c , i , d;
	a = 2;
	b = 3;
	c = 4;
	i = 6;
	d = 7;
    int	kq1 = ++i%7;
    int	kq2 = 5*(c - 3 + d);
    int	kq3 = a*(b + c/d) - 22;
	printf ("\n kq1 : %d", kq1) ;
	printf ("\n kq2 : %d", kq2) ;
	printf ("\n kq3 : %d", kq3) ;
	return 0;
}
