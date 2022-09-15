#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

void main(int argc, char *argv[]) 
{
	int n;
	int num[100];
	int l;
	int desnum[100], k;
	int i, j, temp;
	printf("\n enter the total number of marks to be entered :");
	scanf("%d", &n);
	for(l = 0; l < n; l++)
	{
		printf("\n enter the marks of student %d :", i + 1);
		scanf("%d", &num[1]);
	}
	for(k = 0; k < n; k++)
	desnum[k] = num[k];
	for(i = 0; i < n - 1; i++)
		{
			for(j = i + 1; j < n; j++)
			{
				if(desnum[i] < desnum[j])
				{
					temp = desnum[i];
					desnum[i] = desnum[j];
					desnum[j] = temp;
				}
			}
		}
	for(i = 0; i < n; i++)
	printf("\n number at [%d] is %d", i, desnum[i]);
}
