<?php
require 'vendor/autoload.php';
use Dompdf\Dompdf;
define("DOMPDF_ENABLE_REMOTE", false);

$imageFile = file_get_contents('../images/Aziz.jpg');





$imageData = base64_encode($imageFile);

// Create an HTML <img> element with the base64 encoded image data
$html = '<img src="data:image/jpeg;base64,' . $imageData . '">';

// Create a new dompdf instance
$dompdf = new Dompdf();

// Load the HTML code into dompdf
$dompdf->loadHtml($html);

// Set the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the PDF
$dompdf->render();

// Output the PDF to the browser or save it to a file
$dompdf->stream('image.pdf');


?>

