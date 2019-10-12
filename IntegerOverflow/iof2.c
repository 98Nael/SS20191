#include <stdio.h>
#include <string.h>
void merge(char *s1, size_t l1, char *s2, size_t l2){
    int flag = 100;
    char buf[20];
    if(l1 + l2 + 1 <= sizeof(buf)){
    strncpy(buf,s1,l1);
    strncat(buf,s2,l2);
    }
    printf("String %s and flag is %d: ",buf,flag);
}
int main()
{
   merge("0123456789",10,"abcd",0xFFFFFFFFFFFFFFFF);
   printf("Hello, World!\n");
   return 0;
}
