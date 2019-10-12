#include <stdio.h>
#include <string.h>
void merge(char *s1, unsigned char l1, char *s2, unsigned char l2){
    int flag = 100;
    char buf[15];
    if((char) (l1 + l2 + 1) <= sizeof(buf)){
    strncpy(buf,s1,l1);
    strncat(buf,s2,l2);
    }
    printf("String %s and flag is %d: ",buf,flag);
}
int main()
{
   merge("0123456789",10,"abcdefghijk",0xFF);
   return 0;
}

