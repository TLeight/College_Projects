/*
Tyler Leight

6-2-21

C assignment #2

*/

#include <stdio.h>

int main()
{
	
	int numb[10];
	
	for(int x = 0; x < 10; x++)
	{
		printf("Please input a number: ");
		scanf("%d", &numb[x]);
	}
	
	for(int x = 0; x < 10; x++)
	{
		
		printf("  %d", numb[x]);
		
	}
	
		for(int x = 0; x < 10; x++)
	{
		int numbTwo;
		numbTwo = numb[2];	
		numb[2] = numb[4];
		numb[4] = numbTwo;;
		
		numbTwo = numb[6];	
		numb[6] = numb[8];
		numb[8] = numbTwo;;

		
		printf("  %d", numb[x]);
				
	}


	
	
	return 0;
}
