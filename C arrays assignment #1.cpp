/*
Tyler Leight

6-2-21

C Arrays assignment  #1

*/

#include <stdio.h>

int main()
{
	int calories[7], totalcal;
	
	for(int x = 0; x < 7; x++)
	{
		printf("Enter calorie intake from past 7 days ");
		scanf("%d", &calories[x]);
	}
	
	for(int x = 0; x < 7; x++)
	{
		printf("  %d", calories[x]);
		
		totalcal += calories[x];
	}
	
	
	printf("\nAverage: %d", totalcal/7);
	
	
	
	
	
	return 0;
	
}
