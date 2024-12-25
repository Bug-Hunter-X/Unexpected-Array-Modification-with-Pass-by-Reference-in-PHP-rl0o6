# PHP Pass-by-Reference Bug
This repository demonstrates a common error in PHP related to pass-by-reference and array modification within functions.  The `increment_array_values` function uses pass-by-reference (`&$arr`) to modify the input array directly. While this can be efficient, it can also lead to surprising results if the programmer expects a copy of the array to be modified instead.

**Problem:** The code modifies the original array unexpectedly due to pass-by-reference, leading to potential bugs where the caller's array is changed unintentionally.

**Solution:** The solution provides an alternative implementation that creates a copy of the array before modification, ensuring the original array remains unchanged.