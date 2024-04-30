# Deploy Instruction of project in AWS server

## Common Paths for Files in 'views' Folder:

```php
<?php
// Include the header
include '../views/header.view.php';

// Load the signup page content
include '../views/signup.view.php';

// Include the footer
include '../views/footer.view.php';
```
## Stylesheet Path:

The stylesheet path is "/dgl123/DGL_123_Project/assets/style.css".

## Remaining Paths:

For the remaining paths in your project, add the prefix "/dgl123/DGL_123_Project/" in place of "../". For example:  

```php
// Original path
include '../path/to/somefile.php';

// Updated path
include '/dgl123/DGL_123_Project/path/to/somefile.php';
