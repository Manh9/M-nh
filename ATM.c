#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

void main(int argc, char *argv[]) 
{
	int cardid, mapin, nhap;
	printf("\n cardid:");
	scanf("%d", &cardid);
	printf("\n mapin:");
	scanf("%d", &mapin);
	if(cardid == 500 && mapin == 400)
  {
	printf("\n 1 rut tien");
	printf("\n 2 chuyen khoan");
	printf("\n 3 xem so du");
	printf("\n 4 ket thuc");
	printf("\n nhap lua chon");
	scanf("%d", nhap);
	switch (nhap)
	{
	 case 1:
	 	    printf("\n rut tien");
	 	    break;
	 case 2:
	 	    printf("\n chuyen khoan");
	 	    break;
	 case 3:
	 	    printf("\n xem so du");
	 	    break;
	 case 4:
	 	    printf("\n ket thuc");
	 	    break;
	 default:
	 	    printf("\n no option");
	 	    break;
	}
  }
   else
   printf("\n sai tai khoan hoac ma pin");
}

