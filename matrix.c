#include <stdio.h>
void main()

{
    int array1[10][10],array2[10][10];				// declaring the size of matrice
    int i, j, k, a, m, n,sum=0;			// declaring of variables

    printf("Enter the order of the matrix \n");
    scanf("%d %d", &m, &n);			//Entering the number of rows & columns

    printf("Enter the elements  \n");

    for (i = 0; i < m; ++i)
    {
     for (j = 0; j < n; ++j)
	{
            scanf("%d", &array1[i][j]);		//Entering each element
           
        }
    }

    printf("The given matrix is \n");

    for (i = 0; i < m; ++i)
    {
        for (j = 0; j < n; ++j)
        {
                printf(" %d", array1[i][j]); 	//Displat the given matrix
        }
        printf("\n");
    }



    for (i = 0; i < m; ++i)
    {
	
        for (j = 0; j < n; ++j)
        {
		
               sum  = sum +  array1[i][j];
        }
    }
	printf("Sum of all elements is : %d ", sum);

    printf("After arranging rows in ascending order\n");	//To display the values in ascending order in a particular row

    for (i = 0; i < m; ++i)
    {
        for (j = 0; j < n; ++j)
        {
            for (k =(j + 1); k < n; ++k)
            {
                if (array1[i][j] > array1[i][k])
                {
                    a = array1[i][j];
                    array1[i][j] = array1[i][k];
                    array1[i][k] = a;
                }
            }
        }
    }
    for (i = 0; i < m; ++i)
    {
        for (j = 0; j < n; ++j)
        {
            printf(" %d", array1[i][j]);	//Display The new matrix
        }
        printf("\n");
    }
}   
