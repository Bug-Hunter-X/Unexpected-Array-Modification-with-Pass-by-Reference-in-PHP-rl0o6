```php
function increment_array_values(array &$arr, int $increment): void {
  foreach ($arr as &$value) {
    $value += $increment; // Modifies the original array
  }
}

$myArray = [1, 2, 3, 4, 5];
increment_array_values($myArray, 10);
print_r($myArray); // Output: Array ( [0] => 11 [1] => 12 [1] => 13 [1] => 14 [1] => 15 )
```