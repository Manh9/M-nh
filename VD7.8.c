#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

 main (int argc, char *argv[]) 
{
	char ch;
	clrscr();
	printf("\n enter a lower cased alphabet (a - z):");
	scanf("%c", &ch);
	if(ch < 'a' || ch > 'z')
	printf("\n character not a lower cased alphabet");
	else
	swich (ch)
   {
	 case 'a' :
	 case 'e' :
	 case 'i' :
	 case 'o' :
	 case 'u' :
	 printf("\n character is a vowel");
	 break;
	 case 'z':
	 printf("\n last alphabet (z) was entered");
	 break;
	 default:
	 printf("\n character is a consonant");
	 break;
   }
      }
