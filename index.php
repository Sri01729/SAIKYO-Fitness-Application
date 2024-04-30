<?php
// For Production
//error_reporting(0);
//ini_set('display_errors', 0);

// For Test
error_reporting(E_ALL);
ini_set('display_errors', 1);




// Include the header
include 'Views/headersudo.view.php';

// Load the main page content
include 'Views/index.view.php';

// Include the footer/
include 'Views/footer.view.php';
