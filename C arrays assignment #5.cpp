/*
Tyler Leight

cis 170

6-6-21

C arrays assignment #5
*/

#include<stdio.h>

int main()
{
	int numb[5];
	int numbOne;
	
	for(int x = 0; x < 5; x++)
	{
		printf("Enter up to 5 numbers " );
		scanf("%d", &numb[x]);
	}
		for(int x = 0; x < 5; x++)
	{
		printf("  %d", numb[x]);
		
	}
	
// i got my numbers to shift but my last number always comes up as 2:
	for(int x = 0; x < 5; x++)
	{ 
		numb[x] = numb[(x + 1) % 5] ;
		
		printf("  %d", numb[x]);
		
	}
	
	return 0;	
}
