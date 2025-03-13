<?php
// Load DOMPDF library
require_once 'dompdf/autoload.inc.php';



use Dompdf\Dompdf;
use Dompdf\Options;

// Set DOMPDF options
$options = new Options();
$options->set('defaultFont', 'Helvetica');
$options->set('isHtml5ParserEnabled', true); // Enable HTML5 parsing
$options->set('isRemoteEnabled', true); // Allow loading remote assets (e.g., images)

// Initialize DOMPDF
$dompdf = new Dompdf($options);

// Define HTML content
$html = "
    <h1>Welcome to PDF Generation</h1>
    <p>This PDF was generated using <strong>DOMPDF</strong> in PHP.</p>
";

// Load HTML into DOMPDF
$dompdf->loadHtml(mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8')); // Handle UTF-8 characters

// Set paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the PDF
$dompdf->render();

// Output the PDF to the browser
$dompdf->stream("sample.pdf", ["Attachment" => false]); // Set to false to display in browser
?>
