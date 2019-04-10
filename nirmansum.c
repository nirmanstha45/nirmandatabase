//sum to two 4-bit binary numbers
#include<stdio.h>
#include<conio.h>
#include<math.h>
int binarytodec(long binarynum)
{
	long decnum=0,temp=0,remainder;
	while(binarynum!=0)
	{
		remainder=binarynum%10;
		binarynum=binarynum/10;
		decnum=decnum+remainder*pow(2,temp);
		temp++;
	}
}
int decimaltobin(long decimalnum)
{
	long binarynum=0,temp=0,remainder;
	while(decimalnum!=0)
	{
		remainder=decimalnum%2;
		decimalnum=decimalnum/2;
		binarynum=binarynum+remainder*pow(10,temp);
		temp++;
	}
}
int main ()
{
   long bin1,bin2,dec,a,b;
   printf("Enter two binary numbers:\n");
   scanf("%ld%ld",&bin1,&bin2);
   a=binarytodec(bin1);
   b=binarytodec(bin2);
   dec=a+b;
   decimaltobin(dec);
   printf("the required sum is %ld",decimaltobin(dec));
   
   
}
