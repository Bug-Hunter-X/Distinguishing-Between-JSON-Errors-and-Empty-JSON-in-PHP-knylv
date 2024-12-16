```php
<?php
$data = file_get_contents('data.txt');

if ($data === false) {
    echo 'Error reading file.';
} else {
    $decoded = json_decode($data);

    if ($decoded === null) {
        if (json_last_error() !== JSON_ERROR_NONE) {
            echo 'Error decoding JSON: ' . json_last_error_msg();
        } else {
            echo 'JSON data is empty or null.';
        }
    } else {
        // Process the decoded JSON data
        // ... your code here ...
    }
}
?>
```