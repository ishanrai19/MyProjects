#include <stdio.h>
#include <stdlib.h>
#include <time.h>
int main()
{
    int number, nguesses = 1, guess;
    srand(time(0));
    number = rand() % 500 + 1;

    do
    {
        printf("guess the number between 1 to 500\n");
        scanf("%d", &guess);
        if (guess > number)
        {
            printf("lower number please:)\n");
        }
        else if (number > guess)
        {
            printf("higher number please :)\n");
        }
        else
        {
            printf("you guessed it in %d attempts\n", nguesses);
        }
        nguesses++;
    } while (guess != number);

    return 0;
}