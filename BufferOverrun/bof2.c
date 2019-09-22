#include <stdio.h>
#include <string.h>
int main(void)
{
    char buff[10];
    int pass = 0;
    printf("\n Enter the password : \n");
    gets(buff);
    if(strcmp(buff, "abc123"))
    {
        printf ("\n Wrong Password \n");
    }
    else
    {
        printf ("\n Correct Password \n");
        pass = 1;
    }

    if(pass)
    {
        printf ("\n You got Root privileges \n");
    }

    return 0;
}