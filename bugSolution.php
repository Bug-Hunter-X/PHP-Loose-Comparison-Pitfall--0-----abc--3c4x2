The solution is to use PHP's strict comparison operator (`===`) instead of loose comparison (`==`).  Strict comparison requires both the value and the type of the operands to be identical.

```php
<?php
if (0 === 'abc') {
  echo 'Equal!';
} else {
  echo 'Not equal!';
}
?>
```

This will correctly output 'Not equal!' because the types of the operands (integer and string) are different.