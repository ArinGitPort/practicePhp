<?php

//1. finding the factorial of a number. The factorial of a non-negative
//integer n is the product of all positive integers less than or equal to n.

echo"Input a number to solve its factorial", " ";
$n = fgets(STDIN);

echo "The factorial of $n is", " ", factorial( $n );

/*
1. make a var for $n 
2. Make a recursion function with a param $n 
3. established a base case which is 1 and return if n == 1.
4. Established a formula $n * factorial($n - 1)
5. output computed factorial
*/

function factorial($n) {
    if ($n == 1){
        return 1;
    }
    elseif ($n < 0){
        return "Input only positive integer";
    }
    else{
        return $n * factorial($n -1);
    }
}

/*2. checking if a given number is a prime number. A prime number is a natural number
greater than 1 that has no positive divisors other than 1 and itself. 5 is a prime number
because its only divisors are 1 and 5.*/ 


echo "\nEnter a number to check if its a prime number", " ";
$n2 = fgets(STDIN);

echo "this number is", " ",isPrime( $n2 );


/*
1. Create a functions for checking if number is prime, isPrime($n2)
2. Make a conditional that if n2 is <= 1 output "not prime"
3. Make for loops with $i = 2; as long as $i <= $n2/2; $i++ / IF DIVISIBLE BY 2 AND ABOVE IT MUST BE ITS FACTOR
4. Add conditional statement to check if the number is divisible by 2 and the remainder is zero. 
5. If There is remainder ouput "is prime" if the remainder is zero output "not prime"
*/

function isPrime( $n2 ) {
    if ($n2 <= 1)
    return "not prime";
    for ($i = 2; $i <= $n2/2; $i++){
        if ($n2 % $i == 0)
            return "not prime";
    }
    return "prime";
}



//3. finding the maximum number from 3 numbers inputted by the user. Display the maximum number

/*
1. get user input num1, num2, num3
2. compare the three number using conditional to find the highest
3. display the maximum number
*/


echo"\nInput first number to determine maximum number", " ";
$num1 = fgets(STDIN);

echo"Input second number", " ";
$num2 = fgets(STDIN);

echo"Input third number", " ";
$num3 = fgets(STDIN);

if ($num1 >= $num2 && $num1 >= $num3) {
    echo "Higest number is", " ", $num1;
}else if ($num2 >= $num1 && $num2 >= $num3) {
    echo "Higest number is", " ", $num2;
}else if($num3 >= $num1 && $num3 >= $num2) {
    echo "Higest number is", " ", $num3;
}