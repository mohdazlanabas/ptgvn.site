<?php
/**
 * Template Name: Testing Page Template
 * Description: Custom editable template for testing page
 */

get_header();
?>

<main id="main" class="site-main">
    <article class="testing-page-content">
        <div class="entry-content">

            <!-- START EDITING HERE -->

            <h1>Welcome to My Testing Page</h1>

            <p>This is your custom editable page. You can modify this file directly at:</p>
            <code>/wp-content/themes/twentytwentyfive/template-testing-page.php</code>

            <h2>How to Edit This Page</h2>
            <ol>
                <li>Open this file in your code editor</li>
                <li>Edit the HTML/PHP content between the START and END comments</li>
                <li>Save the file</li>
                <li>Refresh your browser to see changes</li>
            </ol>

            <h2>Add Your Content Here</h2>
            <p>Replace this text with your own content. You can use:</p>
            <ul>
                <li>HTML tags for formatting</li>
                <li>PHP code for dynamic content</li>
                <li>WordPress functions like get_posts(), etc.</li>
            </ul>

            <div class="custom-section" style="background: #f5f5f5; padding: 20px; margin: 20px 0; border-radius: 8px;">
                <h3>Custom Section Example</h3>
                <p>This is a styled section you can customize or remove.</p>
            </div>

            <!-- Example: Display current date -->
            <p><strong>Today's Date:</strong> <?php echo date('F j, Y'); ?></p>

            <!-- Example: Display site name -->
            <p><strong>Site Name:</strong> <?php bloginfo('name'); ?></p>

            <!-- END EDITING HERE -->

        </div>
    </article>
</main>

<?php
get_footer();
