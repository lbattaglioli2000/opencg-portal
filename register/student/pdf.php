<?php
/**
 * Created by PhpStorm.
 * User: Luigi Battaglioli
 * Date: 6/12/2017
 * Time: 1:34 PM
 */

require('fpdf.php');

$servername = "localhost";
$username = "root";
$password = "snickers123";
$db = "opencg";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get back the users information
$email = $_POST["email"];
$studentID = $conn->query("SELECT userID FROM students WHERE email = '$email'");
$name = $conn->query("SELECT userName FROM students WHERE userID = '$studentID'");
$school = $conn->query("SELECT schoolName FROM students WHERE userID = '$studentID'");


class PDF extends FPDF
{
// Page header
    function Header()
    {
        // Logo
        $this->Image('../../includes/logo.png',10,6,30);
        // Arial bold 15
        $this->SetFont('Arial','B',15);
        // Move to the right
        $this->Cell(80);
        // Title
        $this->Cell(30,10,'OpenCG Student Registration Information',1,0,'C');
        // Line break
        $this->Ln(20);
    }

// Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Page number
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
}

// Instantiation of inherited class
$pdf = new PDF();

$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFont('Times','',12);

$pdf->Output();