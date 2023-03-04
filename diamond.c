#include <stdio.h>
void main()
{

     int count = 0, flash = 0, temp = 0, plus2 = 1;
     for (temp = 6; temp > 0; temp--)
     {
          printf("\n");
          for (count = 0; count < temp; count++)
          {
               printf("_");
          }
          printf("*");
          if (temp != 6)
          {
               for (flash = 0; flash < plus2; flash++)
               {
                    printf("_");
               }
               printf("*");
               plus2 = plus2 + 2;
          }
     }
     // for (count = 0; count < 5; count++)
     // {
     //      printf("_");
     // }
     // printf("*");
     // printf("\n");
     // for (count = 0; count < 4; count++)
     // {
     //      printf("_");
     // }
     // printf("*");
     // printf("_");
     // printf("*");

     // printf("\n");
     // for (count = 0; count < 2; count++)
     // {
     //      printf("_");
     // }
     // printf("*");
     // for(flash=0;flash<5;flash++)
     // {
     //      printf("_");
     // }
     // printf("*");
}