# PHP Assignment vs. Equality in Conditional Statements

This repository demonstrates a common error in PHP: using the assignment operator (=) instead of the equality operator (==) within an `if` statement's conditional expression. This leads to unexpected behavior, as the assignment always evaluates to true (except when assigning false).

The `bug.php` file contains the erroneous code, while `bugSolution.php` shows the corrected version.  The error is subtle and can be easily missed during code reviews, especially in larger and more complex projects.

## How to reproduce

1. Clone this repository.
2. Run `bug.php` using a PHP interpreter.
3. Observe the unexpected output.
4. Run `bugSolution.php` to see the correct behavior.

This example highlights the importance of careful code writing and thorough testing to prevent such errors.