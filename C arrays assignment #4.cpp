/*
Tyler Leight

cis 170

6-4-21

C arrays assignment #4
*/

#include<stdio.h>

int main()
{
	int numb[10];
	
	for(int x = 0; x < 10; x++)
	{
		printf("Enter up to 10 numbers " );
		scanf("%d", &numb[x]);
	}
		for(int x = 0; x < 10; x++)
	{
		printf("  %d", numb[x]);
		
	}

	for(int x = 0; x < 10; x++)
	{
		if(numb[x] % 2 == 0)
		{
			printf("  %d", numb[x]);
			x++;
		}
	
	
	}	
	
	
	
	return 0;
	
}
