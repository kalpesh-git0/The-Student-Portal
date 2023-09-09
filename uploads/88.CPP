#include<stdio.h>
#include<conio.h>
void main (){
clrscr();
int a,b;
   for(a=1;a<=4;a++)
       printf("* ");
       printf("\n");
     for(a=1;a<=5;a++)
    {
      for(b=1;b<=a;b++)
      {
	 printf(" ");
      }
      for(b=1;b>=1;b--)
      {
	  printf("*");
      }
      for(b=5;b>=1;b--)
      {
	  printf(" ");
      }
	  printf("*");
     printf("\n");
     }
     for(a=1;a<=6;a++)
     {
	 printf(" ");
     }
     for(a=1;a<=4;a++)
	 printf("* ");
     }