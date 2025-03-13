<?php
include("connection.php");

             
                  $qry="SELECT * FROM student_register ORDER BY id DESC LIMIT 1";
                  $result=mysqli_query($con,$qry);
                  $row=mysqli_fetch_assoc($result);
                   

                  $res_no=rand(10000,99999);
              ?>
<?php
//Load DOMPDF library
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
    <h1 style='text-align:center'>Admission Receipt</h1>
       <div style='border:2px solid black;'>
    
     <h3 style='margin-left:20px;'>Receipt No:- ".$res_no."</h3>
    <h3 style='margin-left:20px;'>Date:-".date("d/m/Y")."</h3>
    <h3 style='margin-left:20px;'>Student name:- ".$row["fname"]." ".$row["lname"]."</h3>
    <h3 style='margin-left:20px;'>Course:- ".$row["course"]."</h3>
    <h3 style='margin-left:20px;'>Class:- ".$row["class"]."</h3>
    <h3 style='margin-left:20px;'>Paid Fee:- ". $row["fee_paid"]."</h3>
    <hr><br><br>
    <h4 style='margin-left:20px; float:left;'>Seal & sign </h4> <h4 style='margin-left:550px;'>For Principal</h4>
    </div>
";
   





// Load HTML into DOMPDF
$dompdf->loadHtml(mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8')); // Handle UTF-8 characters

// Set paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the PDF
$dompdf->render();

// Output the PDF to the browser
$dompdf->stream("Fee receipt.pdf", ["Attachment" => false]); // Set to false to display in browser
?>
