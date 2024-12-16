```php
$data = file_get_contents('data.txt');
$decoded = json_decode($data);

if ($decoded === null && json_last_error() !== JSON_ERROR_NONE) {
    echo 'Error decoding JSON: ' . json_last_error_msg();
}
```