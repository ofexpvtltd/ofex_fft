<?php
// Set the base URL of your website
$baseUrl = 'https://www.example.com/';

// Define the list of pages with their corresponding URLs
$pages = array(
    'home' => $baseUrl . '?page=home',
    'about' => $baseUrl . '?page=aboutofex',
    'whyofex' => $baseUrl . '?page=whyofex',
    'CaseStudy' => $baseUrl . '?page=CaseStudy',
    // Add more pages and their URLs as needed
);

// Set the appropriate content-type header
header('Content-type: application/xml; charset=utf-8');

// Output the XML sitemap
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
foreach ($pages as $page => $url) {
    echo '   <url>' . "\n";
    echo '      <loc>' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '</loc>' . "\n";
    echo '      <lastmod>' . date('Y-m-d') . '</lastmod>' . "\n";
    echo '      <changefreq>daily</changefreq>' . "\n";
    echo '      <priority>0.8</priority>' . "\n";
    echo '   </url>' . "\n";
}
echo '</urlset>';
?>
