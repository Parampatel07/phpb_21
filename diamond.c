#include <stdio.h>
void main()
{

     int count = 0, flash = 0, temp = 0, plus2 = 1;
     for (temp = 6; temp > 0; temp--)
     {
          printf("\n");
          for (count = 0; count < temp; count++)
          {
               printf(" ");
          }
          printf("*");
          if (temp != 6)
          {
               for (flash = 0; flash < plus2; flash++)
               {
                    printf(" ");
               }
               printf("*");
               plus2 = plus2 + 2;
          }
     }
     plus2 = 7;
     for (temp = 2; temp < 7; temp++)
     {
          printf("\n");
          for (count = 0; count < temp; count++)
          {
               printf(" ");
          }
          printf("*");
          if (temp != 6)
          {
               for (flash = 0; flash < plus2; flash++)
               {
                    printf(" ");
               }
               printf("*");
          }
          plus2 = plus2 - 2;
     }
     // printf("\n");
     // for (count = 0; count < 3; count++)
     // {
     //      printf(" ");
     // }
     // printf("*");
     // for (flash = 0; flash < 5; flash++)
     // {
     //      printf(" ");
     // }
     // printf("*");
     // printf("\n");
     // for(count=0;count<4;count++)
     // {
     //      printf(" ");
     // }
     // printf("*");
     // for(flash=0;flash<3;flash++)
     // {
     //      printf(" ");
     // }
     // printf("*");
     // for (count = 0; count < 5; count++)
     // {
     //      printf(" ");
     // }
     // printf("*");
     // printf("\n");
     // for (count = 0; count < 4; count++)
     // {
     //      printf(" ");
     // }
     // printf("*");
     // printf(" ");
     // printf("*");

     // printf("\n");
     // for (count = 0; count < 2; count++)
     // {
     //      printf(" ");
     // }
     // printf("*");
     // for(flash=0;flash<5;flash++)
     // {
     //      printf(" ");
     // }
     // printf("*");
}