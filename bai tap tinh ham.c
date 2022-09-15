#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */
int tong(int num1, int num2);
int hieu(int num1, int num2);
int tich(int num1, int num2);
float tich(int num1, int num2);
void main(int argc, char *argv[]) 
{
	char c;
	int n1, n2,
	printf("nhap so n1: \n");
	scanf("%d", &n1);
	printf("nhap phep tinh: \n"); 
	printf("nhap so n2: \n");
	scanf("%d", &n2);
	scanf("%c", &c);
	switch(c)
			{
			case '+' :
					  printf("ket qua phep toan : %d\n\n", tong(n1,n2));
					  break;
			case '-' :
					  printf("ket qua phep toan : %d\n\n", hieu(n1,n2));
					  break;
			case '*' :
					  printf("ket qua phep toan : %d\n\n", tich(n1,n2));
					  break;
			case '/' :
					  printf("ket qua phep toan : %d\n\n", thuong(n1,n2));
					  break; 
			default :
					 printf("nhap sai phep toan\n");
					 break;
		}
}
int tong(int num1, int num2)
							{
							int a;
							a = num1 + num2;
							return(a);
							}
int hieu(int num1, int num2)
							{
							 int b;
							 b = num1 - num2;
							 return(b);
							}
int tich(int num1, int num2)
							{
							 int c;
							 c = num1 * num2;
							 return(c);
							}
int thuong(int num1, int num2)
							{
							 int d;
							 d = num1 / num2;
							 return(d);
							}
