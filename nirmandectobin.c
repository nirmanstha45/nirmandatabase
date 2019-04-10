//binary to decimal and decimal to binary
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
		printf("remainder %ld",remainder);
		binarynum=binarynum+remainder*pow(10,temp);
		temp++;
	}
}
 int main ()
 {
 	int a;
	long binarynum,decimalnum;
 	printf("Enter 1.binarytodecimal 2.decimaltobinary");
 	scanf("%d",&a);
 	switch(a)
 	{
 		case 1:
 		printf("Enter the binary num:");
 		scanf("%ld",&binarynum);
 		printf("The decimal number is %ld",binarytodec(binarynum));
 		break;
 		case 2:
     	printf("Enter the decimal num:");
 		scanf("%ld",&decimalnum);
 		printf("The binary number is %ld",decimaltobin(decimalnum));
 		break;
 		default:
 			printf("Enter the correct choice");
	 }
 }
