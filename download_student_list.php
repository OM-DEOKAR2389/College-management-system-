<?php
include("connection.php");

               if(isset($_POST["course"])){
                $course= $_POST["course"];
                $class=$_POST["class"];
                   

                $qry5 = "SELECT * FROM student_register
                WHERE course = '" . mysqli_real_escape_string($con, $course) . "' 
                AND class = '" . mysqli_real_escape_string($con, $class) . "' ";
              
        
       
                       $res=mysqli_query($con,$qry5);
                       $count=1;
                     
                     
               }
               
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
    <h1 style='text-align:center'>Student List</h1>
<pre><h3>Course : ".$course ."   Class : ".$class." </h3></pre>
    <div>
    <table border='1' style='border-collapse:collapse;text-align:center;width:100%;'>
        <tr>
            <th>Sr.No </th>
            <th>Student Name</th>
            <th>Gender</th>
        </tr>";

while ($row2 = mysqli_fetch_assoc($res)) {
    $html .= "<tr>
                <td>$count</td>
                <td>".$row2["fname"]." ".$row2["ffname"]." ".$row2["lname"]."</td>
                <td>".$row2["gender"]."</td>
              </tr>";
    $count++;
}

$html .= "</table></div>";

// Load HTML into DOMPDF
$dompdf->loadHtml(mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8')); // Handle UTF-8 characters

// Set paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the PDF
$dompdf->render();

// Output the PDF to the browser
$dompdf->stream("Fee receipt.pdf", ["Attachment" => false]); // Set to false to display in browser
?>
