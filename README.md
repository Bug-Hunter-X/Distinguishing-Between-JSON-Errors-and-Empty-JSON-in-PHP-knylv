# Distinguishing Between JSON Errors and Empty JSON in PHP

This example demonstrates a common issue in PHP when handling JSON data: the `json_decode()` function returns `null` for both malformed JSON and empty JSON strings.  This can lead to confusion and unexpected behavior in your application.

The provided code showcases how to correctly check for JSON errors using `json_last_error()` to ensure robust error handling.

**Problem:**

The `json_decode()` function returns `null` when it encounters a parsing error or an empty JSON string.  Without additional checks, it is not possible to determine why `null` was returned.

**Solution:**

By combining the use of `json_decode()` with `json_last_error()` and `json_last_error_msg()`, we can accurately distinguish between a malformed JSON string and a successful decode that happened to result in a `null` value (empty JSON).
