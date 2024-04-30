<?php
$requestUri = $_SERVER['REQUEST_URI'];

// Find the position of "/DGL_123_PROJECT/" in the request URI
$position = strpos($requestUri, "/DGL_123_PROJECT/");

if ($position !== false) {
    // Extract "/DGL_123_PROJECT/" and everything after it
    $extractedPath = substr($requestUri, $position, strlen("/DGL_123_PROJECT/"));

    // Assign the extracted path
    $proj_root = $extractedPath;
} else {
    // "/DGL_123_PROJECT/" not found in the request URI
    echo "Not found";
}
