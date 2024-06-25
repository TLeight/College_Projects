/*
Tyler Leight

cis 170

5-25-21

BMI assi8gnment
*/

#include <stdio.h>
int getBMIone(); 
int getBMItwo();
int getBMIThree();


int main()
{
	float bmi;
	
	bmi = getBMIone();
	bmi = getBMItwo();
	bmi = getBMIThree();

	
	return 0;
	
}

getBMIone()
{
	float weight, height, bmi;
	
	for(weight; weight >= 1000; weight);
	{
	printf("Please enter you weight in pounds: ");
	scanf("\n%f", &weight);
	}
	
	for(height; height >= 7; height);
	{
	printf("Please enter you height in inches: ");
	scanf("\n%f", &height);
	}

	bmi = weight * 703 / (height*2);
	
	printf("Your BMI is: %f", bmi);
		
	return bmi;
	
}

getBMItwo()
{
	
	float weight, height, bmi;
	
	do
	{
	printf("\nPlease enter you weight in pounds: ");
	scanf("\n%f", &weight);
	weight;
	}while(weight >= 1000);
	
	do
	{
	printf("Please enter you height in inches: ");
	scanf("\n%f", &height);
	height;
	}while(height >= 7);

	bmi = weight * 703 / (height*2);
	
	printf("Your BMI is: %f", bmi);
	
	return bmi;
	
}
getBMIThree()
{
	float weight, height, bmi;
	char answer;
	
	printf("would you like to have your BMI calculated? ");
	scanf("\n%c", &answer);
	
	while(answer == 'N' || answer == 'n');
	
		while(weight >= 1000)
		{
		printf("\nPlease enter you weight in pounds: ");
		scanf("\n%f", &weight);
		weight;
		}
	
		while(height >= 7)
		{
		printf("Please enter you height in inches: ");
		scanf("\n%f", &height);
		height;
		}

		bmi = weight * 703 / (height*2);
	
		printf("Your BMI is: %f", bmi);
	
	printf("would you like to have your BMI calculated? ");
	scanf("\n%c", &answer);
	
	return bmi;
}
