#include <stdio.h>
#include <string.h>
void empSalary(char *name, int increment)
{
    int salary=1200;
    char empName[10];
    salary = salary + increment;
    strcpy(empName,name);
    printf("Employee name: %s has salary of: %d", empName, salary);
}
main()
{ 
   char name[20];
   printf("Enter name: ");
   scanf("%s",name);
   empSalary(name,100);
}
