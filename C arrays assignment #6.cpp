/*
Tyler Leight

cis assignment #6

6-7-21

*/

#include <stdio.h>

int main()
{
	
	int numb[8] = {21, 32, 43, 54, 65, 76, 87, 98};
	int numbOne;
	
	for(int x = 0; x < 8; x++)
	{
		printf("  %d", numb[x]);
	}
printf("\n");
	
	numbOne = numb[0];
	numb[0] = numb[7];
	numb[7] = numbOne;
	
	numbOne = numb[1];
	numb[1] = numb[6];
	numb[6] = numbOne;
	
	numbOne = numb[2];
	numb[2] = numb[5];
	numb[5] = numbOne;
	
	numbOne = numb[3];
	numb[3] = numb[4];
	numb[4] = numbOne;
	
	
		for(int x = 0; x < 8; x++)
	{
		printf("  %d", numb[x]);
	}
	
	
	return 0;
		
}
