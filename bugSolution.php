```php
function increment_array_values_copy(array $arr, int $increment): array {
  $newArray = $arr; // Create a copy of the array
  foreach ($newArray as &$value) {
    $value += $increment;
  }
  return $newArray; // Return the modified copy
}

$myArray = [1, 2, 3, 4, 5];
$incrementedArray = increment_array_values_copy($myArray, 10);
print_r($myArray); // Output: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )
print_r($incrementedArray); // Output: Array ( [0] => 11 [1] => 12 [2] => 13 [3] => 14 [4] => 15 )
```