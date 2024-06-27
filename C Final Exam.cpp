#include <stdio.h>
#include <string.h>
#include <stdlib.h>
#include<ctype.h>

struct Meals
{
  char description[30];
  char category;
  int calories;
  int fat;
  int protein;
  int carbs;
  int quantity;
};

struct Selected
{
  char description[30];
  char category;
  float price;
};

void loadMeals(struct Meals available[]);
void grabUserinfo();
void getSelectedmeals(struct Selected meals[], struct Meals available[]);
//void printSummary(void grabUserinfo(), struct Selected meals[]);

int main() 
{
  struct Meals available [25];
  struct Selected meals[12];

  loadMeals(available);
  grabUserinfo();
  getSelectedmeals(meals, available);
  //printSummary(grabUserinfo, meals);

  return 0;
}

void loadMeals(struct Meals available[])
{
  FILE *fp;
  fp = fopen("availableMeals.csv", "r");

  if(fp == NULL)
  {
    printf("Error opening file");
  }

  int x;
  char line [30];
  char *sp;

 while(fgets(line,100,fp) != NULL)
 {

  sp = strtok(line, ",");
  strcpy(available[x].description, sp);

  sp = strtok(NULL, ","); 
  available[x].category, sp;// this an issue
 
  sp = strtok(NULL, ",");
  available[x].calories = atoi(sp);
 
  sp = strtok(NULL, ",");
  available[x].fat = atoi(sp);

  sp = strtok(NULL, ",");
  available[x].protein = atoi(sp);

  sp = strtok(NULL, ",");
  available[x].carbs = atoi(sp);

  sp = strtok(NULL, ",");
  available[x].quantity = atoi(sp);

 }
  fclose(fp);
}

void grabUserinfo()
{
  int accountnumb;
  char name[30];
  int  numbmeals;

  printf("\nPlease enter your account number ");
  scanf("%d", &accountnumb);

  getchar();
  printf("\nPlease enter your full name ");
  fgets(name, 30, stdin);

  printf("\nHow many meals do you want? ");
  scanf("%d", &numbmeals);

  while(numbmeals > 12 || numbmeals < 1)
  {
    printf("\nPlease enter a number between 1-12.");
    printf("\nHow many meals do you want? ");
    scanf("%d", &numbmeals);
  }

}

void getSelectedmeals(struct Selected meals[], struct Meals available[])
{
  char category;

  printf("Please choose from the following ");

  printf("\nB - breakfast");
  printf("\nL - lunch");
  printf("\nD - dinner");
  printf("\nS - snack");
  
  scanf("%c", &category);
  
  int x;
  printf("\n %s %c %d %d %d %d %d", available[x].description, available[x].category, available[x].calories, available[x].fat,available[x].protein, available[x].carbs, available[x].quantity);

  for(x = 0; x < 12; x++)
  {
	int numb;
	
    if(category = available[x].category)
    {
      printf("How many do you want ");
      scanf("%d", &numb);
      available[x].quantity--;
    }
  }
  
  switch(category)
  {
    case 'b':
    printf("$5.99");
    break;

    case 'l':
    printf("7.79");
    break;

    case 'd':
    printf("9.69");
    break;

    case 's':
    printf("3.99");
    break;
  }

}
/*
void printSummary(void grabUserinfo(), struct Selected meals[])
{
	FILE *fp;
	fp = fopen("printfile.txt", "r");
	
	int x;
	getchar();
	printf("%s", name);
	
	printf("%s", meals[x].description);
	
	fclose(fp);
}*/
