The solution is simple: replace the assignment operator (=) with the equality operator (==) inside the if condition.

```php
<?php
$a = 5;
if ($a == 10) {
    echo "a is 10";
} else {
    echo "a is not 10";
}
?>
```
This corrected code correctly checks if the value of `$a` is equal to 10 before executing the corresponding block of code.