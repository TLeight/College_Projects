/*
Tyler Leight

cis 170

6-4-21

C arrays assignment #3
*/

#include<stdio.h>

int main()
{
	float numb[] = {18.65, 24.56, 99.32, 70.14, 35.78, 6.90};
	
	for(int x = 0; x < 6; x++)
	{
	printf("  %.2f", numb[x]);
	}
	
	float numbOne;

		
	for(int x = 0; x < 6; ++x)
	{
		for(int y = 0; y < 6; ++y)
		{
			
		if(numb[0] < numb[1])
		{
			numbOne = numb[0];
			numb[0] = numb[1];
			numb[1] = numbOne;
			
		}else if(numb[1] < numb[2])
		{
			numbOne = numb[2];
			numb[2] = numb[1];
			numb[1] = numbOne;
			
	
		}else if(numb[2] < numb[3])
		{
			numbOne = numb[2];
			numb[2] = numb[3];
			numb[3] = numbOne;
			
	
		}else if(numb[3] < numb[4])
		{
			numbOne = numb[3];
			numb[3] = numb[4];
			numb[4] = numbOne;
			
	
		}else if(numb[4] < numb[5])
		{
			numbOne = numb[5];
			numb[5] = numb[4];
			numb[4] = numbOne;
			
	
		}else(numb[5] < numb[4]);
		{
			numb[5] = numb[5];
			
	
			}
		}		
		printf("  %.2f", numb[x]);
	}
	
	
	return 0;
	
}
