#include <stdio.h>

int main() {
    double number1, number2, result;
    char operator;

    // Input
    printf("Enter an expression in the format <number1> <operator> <number2>: ");
    scanf("%lf %c %lf", &number1, &operator, &number2);

    // Evaluation
    if (operator == '+') {
        result = number1 + number2;
    } else if (operator == '-') {
        result = number1 - number2;
    } else if (operator == '*') {
        result = number1 * number2;
    } else if (operator == '/') {
        if (number2 != 0) {
            result = number1 / number2;
        } else {
            printf("Error: Division by zero is not allowed.\n");
            return 1; // Exit with an error code
        }
    } else {
        printf("Error: Invalid operator.\n");
        return 1; // Exit with an error code
    }

    // Output
    printf("Result: %.2f\n", result);

    return 0; // Exit successfully
}