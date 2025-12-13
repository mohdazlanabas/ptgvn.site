<?php
/**
 * Standalone Testing Page
 * Edit this file locally and access it directly at: your-site.com/testing-page.php
 */

// Load WordPress (optional - only if you need WordPress functions)
require_once('wp-load.php');
get_header(); // Remove this line if you want a completely standalone page
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            line-height: 1.6;
        }
        h1 {
            color: #333;
            border-bottom: 3px solid #0073aa;
            padding-bottom: 10px;
        }
        .content-box {
            background: #f5f5f5;
            padding: 20px;
            margin: 20px 0;
            border-radius: 8px;
        }
    </style>
</head>
<body>

    <!-- START EDITING YOUR CONTENT HERE -->

    <h1>My Testing Page !!!</h1>

    <p>This is a standalone page you can edit locally!</p>

    <div class="content-box">
        <h2>Welcome to Gaia Digital Agency</h2>
        <p>Add your custom content here. This file is located at:</p>
        <code>/ptgvn.site/testing-page.php</code>
    </div>

    <h2>How to Edit This Page</h2>
    <ol>
        <li>Open <code>/ptgvn.site/testing-page.php</code> in your code editor</li>
        <li>Edit the HTML content</li>
        <li>Save the file</li>
        <li>Refresh your browser - changes appear immediately!</li>
    </ol>

    <h2>Add Your Content Below</h2>
    <p>You can add anything here: text, images, forms, etc.</p>

    <!-- Add your custom content below -->



    <!-- END EDITING -->

</body>
</html>

<?php
// get_footer(); // Remove this line if you want a completely standalone page
?>
