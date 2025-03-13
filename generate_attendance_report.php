<?php
include("connection.php");

               if(isset($_POST["course"])){
                $course= $_POST["course"];
                $class=$_POST["class"];
                $sub=$_POST["sub"];
                $date=$_POST["date"];    

                $qry5 = "SELECT * FROM student_attendance 
                WHERE course = '" . mysqli_real_escape_string($con, $course) . "' 
                AND class = '" . mysqli_real_escape_string($con, $class) . "' 
                AND subject= '" .  mysqli_real_escape_string($con, $sub ). "' 
                AND attendance_date = '" . mysqli_real_escape_string($con, $date) . "'";
        
       
                       $res=mysqli_query($con,$qry5);
                       $rollno=101;   
                     
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
    <h1 style='text-align:center'>Attendance Report</h1>
<pre><h3>Course : ".$course ."   Class : ".$class."    Subject : ".$sub."    Date : ".$date."</h3></pre>
    <div>
    <table border='1' style='border-collapse:collapse;text-align:center;width:100%;'>
        <tr>
            <th>Roll NO</th>
            <th>Student Name</th>
            <th>Status</th>
        </tr>";

while ($row2 = mysqli_fetch_assoc($res)) {
    $html .= "<tr>
                <td>$rollno</td>
                <td>".$row2["sname"]."</td>
                <td>".$row2["status"]."</td>
              </tr>";
    $rollno++;
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
