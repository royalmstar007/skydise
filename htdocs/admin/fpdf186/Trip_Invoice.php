<?php
// Include your database connection code here (e.g., using PDO or mysqli).
include 'config.php';
    if (!$conn) {
        die('Could not connect: ' . mysqli_error($conn));
    }
    // if (isset($_GET['id'])) {
    $id = $_GET['ride_id'];
    // echo "ID is: " . $id;
    // } else {
    //     echo "ID not found in the URL.";
    // }

// Fetch data from the SQL table.
$query = "SELECT * FROM trip WHERE ride_no = $id";
// Execute the query and fetch data into an array.
$result = $conn->query($query);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $name = $row['name'];
        $phone1 = $row['phone'];
        $phone = substr($phone1, -4);
        $email = $row['email'];
        $driver_name = $row['driver_name'];
        $cartype = $row['cartype'];
        $vc_number = $row['vc_number'];
        $ride_no = $row['ride_no'];
        $pickup = $row['pickup'];
        $drop_location = $row['drop_location'];
        $date = $row['date'];
        $trip_price = $row['trip_price'];
        $tax = $row['tax'];
        $toll = $row['toll'];
        $total_amount = $row['total_amount'];
        $bata = $row['bata'];
        $sub_total = $row['sub_total'];
        $type = $row['type'];
        $pay_mode = $row['pay_mode'];
        $pay_status = $row['pay_status'];
        $drop_date = $row['drop_date'];
    }
}
// Include the PDF library (e.g., TCPDF or FPDF).
require_once('fpdf.php');

// Create a new PDF instance.
$pdf = new FPDF();

// Add content to the PDF using fetched data.
// Example:
// $pdf->SetFont('helvetica', '', 12);

// foreach ($fetched_data as $row) {
//     $product_name = $row['product_name'];
//     $quantity = $row['quantity'];
//     $unit_price = $row['unit_price'];
//     $total_price = $quantity * $unit_price;

//     // Add the data to the PDF.
//     $pdf->Cell(40, 10, $product_name, 1);
//     $pdf->Cell(30, 10, $quantity, 1);
//     $pdf->Cell(40, 10, '$' . number_format($unit_price, 2), 1);
//     $pdf->Cell(40, 10, '$' . number_format($total_price, 2), 1);

//     // Move to the next line.
//     $pdf->Ln();
// }
// $pdf->Cell(0, 10, 'Data from SQL Table:', 0, 1);
// Loop through the fetched data and add it to the PDF.

// Output the PDF to the browser.
// $pdf->Output('your_pdf_filename.pdf', 'I');
// Create a new PDF document
$pdf = new FPDF('P', 'mm', 'A4');
$pdf->SetMargins(10, 10, 10);
// $pdf->setPrintHeader(false);
class MyPDF extends FPDF {
    function Header() {
        // Leave this function empty to have no header
        // Or you can add your custom header content here
        // For example:
        // $this->Cell(0, 10, 'My Custom Header', 0, 1, 'C');
    }
}
$pdf = new MyPDF();
$pdf->AddPage();
// Set the border width (you can adjust this value as needed)
// $pdf->SetLineWidth(1); // 1 is the border width in points

// Set the border color (you can adjust RGB values as needed)
// $pdf->SetDrawColor(0, 0, 0); // Black color in RGB

// Draw a rectangle around the entire page
// $pdf->Rect(0, 0, $pdf->getPageWidth(), $pdf->getPageHeight(), 'D');
// Set the font

// $pdf->SetFont('helvetica', 'B', 17);
// $pdf->SetFillColor(94, 23, 235);
// // Add your content
// $pdf->SetTextColor(255, 255, 255);
// // $pdf->SetTextColor(94, 23, 235);
// $pdf->Cell(0, 13, 'SkyDise', 1, 1, 'C', true);
// $pdf->SetFont('Arial', '', 12);
$imagePath1 = 'head1.jpg';
$x=8;$y=5;$w=155;$h=35;
// $pdf->Image($imagePath1, 8, 5, 155, '', 'jpg', '', 'T', false, 300, '', false, false, 0, false, false, false);
$pdf->Image($imagePath1, $x, $y, $w, $h);

$pdf->Ln();
$pdf->SetFont('helvetica', '', 12);
$pdf->Cell(89, 55, '', 0);
$pdf->Cell(17, 69, 'Ride No:', 0);
$pdf->Cell(25, 69, $ride_no, 0);
$pdf->Ln(5);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->Cell(10, 83, '', 0);
$pdf->Cell(16, 83, 'Date In:', 0);
$pdf->SetFont('helvetica', '', 12);
$pdf->Cell(105, 83, $date, 0);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->Cell(19, 83, 'Date Out:', 0);
$pdf->SetFont('helvetica', '', 12);
$pdf->Cell(25, 83, $drop_date, 0);
$pdf->Ln(10);
$pdf->Cell(13, 10, ' ', 0);
$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();
$pdf->SetFont('helvetica', 'B', 12);
// Customer Details
// $pdf->Cell(0, 10, '', 0, 1);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(80, 10, ' ', 0);
$pdf->Cell(0, 5, 'Trip Details', 0);$pdf->Ln();
$pdf->Cell(13, 10, ' ', 0);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->Cell(122, 7, 'Pickup Address', 0);
$pdf->Cell(60, 10, 'Drop Address', 0);
$pdf->Ln();
$pdf->SetFont('helvetica', '', 12);
$pdf->Cell(1, 5, '', 0);
$pdf->Cell(125, 15, $pickup, 0);
$pdf->Cell(60, 13, $drop_location, 0);
$imagePath = 'right_arrow.jpeg';
// $pdf->Image($imagePath, 90, 75, 25, '', 'jpeg', '', 'T', false, 300, '', false, false, 0, false, false, false);
// $pdf->Cell(15, 15, ' ', 0);
$x1=90;$y1=75;$w1=25;$h1=25;
// $pdf->Image($imagePath1, 8, 5, 155, '', 'jpg', '', 'T', false, 300, '', false, false, 0, false, false, false);
$pdf->Image($imagePath, $x1, $y1, $w1, $h1);
$pdf->Cell(1, 25, '', 0);
// $pdf->Ln();
// $pdf->Cell(60, 10, 'Customer Name: John Doe', 0);
// $pdf->Cell(60, 10, 'Invoice Number: INV12345', 0);
// $pdf->Cell(0, 10, 'Invoice Date: ' . date('Y-m-d'), 0);
// $pdf->Ln();
$centerX1 = 105;
$centerY1 = 172;
$pdf->SetDrawColor(0, 0, 0);
// Draw a centered horizontal line
$lineLength = 200; // Adjust the length of the line as needed
$pdf->Line($centerX1 - $lineLength / 2, $centerY1, $centerX1 + $lineLength / 2, $centerY1);
$pdf->Ln();
$pdf->SetFont('helvetica', 'B', 12);
$pdf->Cell(0, 2, 'Customer Details', 0, 1, 'C');
$pdf->Ln();
// $pdf->Cell(0, 10, 'Customer Details', 0, 1);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->Cell(34, 13, 'Customer Name: ', 0);
$pdf->SetFont('helvetica', '', 12);
$pdf->Cell(35, 13, $name, 0);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->Cell(32, 13, 'Phone Number:', 0);
$pdf->SetFont('helvetica', '', 12);
$pdf->Cell(32, 13, 'XXXXXX'.$phone, 0);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->Cell(18, 13, 'Email ID:', 0);
$pdf->SetFont('helvetica', '', 12);
$pdf->Cell(40, 13, $email, 0);
$pdf->Ln();
// $pdf->Ln();

// Calculate the center of the page
$pageWidth = $pdf->getPageWidth();
$pageHeight = $pdf->getPageHeight();
$centerX = 105;
$centerY = 96;
$pdf->SetDrawColor(0, 0, 0);
// Draw a centered horizontal line
$lineLength = 200; // Adjust the length of the line as needed
$pdf->Line($centerX - $lineLength / 2, $centerY, $centerX + $lineLength / 2, $centerY);
// $pdf->Ln();
$pdf->SetFont('helvetica', 'B', 12);
$pdf->Cell(0, 15, 'Driver Details', 0, 1, 'C');
// $pdf->Cell(0, 10, 'Customer Details', 0, 1);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->Cell(28, 5, 'Driver Name:', 0);
$pdf->SetFont('helvetica', '', 12);
$pdf->Cell(39, 5, $driver_name, 0);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->Cell(30, 5, 'Vehicle Name:', 0);
$pdf->SetFont('helvetica', '', 12);
$pdf->Cell(32, 5, $cartype, 0);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->Cell(34, 5, 'Vehicle Number:', 0);
$pdf->SetFont('helvetica', '', 12);
$pdf->Cell(32, 5, $vc_number, 0);
$pdf->Ln();
$centerX2 = 105;
$centerY2 = 122;
$pdf->SetDrawColor(0, 0, 0);
// Draw a centered horizontal line
$lineLength = 200; // Adjust the length of the line as needed
$pdf->Line($centerX2 - $lineLength / 2, $centerY2, $centerX2 + $lineLength / 2, $centerY2);
$pdf->Ln();$pdf->Ln();
$pdf->SetFont('helvetica', 'B', 12);
$pdf->Cell(0, 5, 'Billing Details', 0, 1, 'C');
$pdf->Ln();
// Price Details
$pdf->Cell(9, 10, '', 0);
$pdf->Cell(40, 10, 'Trip Type', 0);
$pdf->Cell(40, 10, 'Trip Price', 0);
$pdf->Cell(35, 10, 'Toll', 0);
$pdf->Cell(35, 10, 'Tax', 0);
$pdf->Cell(35, 10, 'Total', 0);
$pdf->Ln();
$pdf->SetFont('helvetica', '', 12);
$centerX4 = 105;
$centerY4 = 147;
$pdf->SetDrawColor(0, 0, 0);
// Draw a centered horizontal line
$lineLength = 200; // Adjust the length of the line as needed
$pdf->Line($centerX4 - $lineLength / 2, $centerY4, $centerX4 + $lineLength / 2, $centerY4);
$pdf->Cell(11, 10, '', 0);
$pdf->Cell(41, 10, $type, 0);
// $pdf->AddFont('DejaVuSans', '', 'ttf/DejaVuSans.ttf');
// if (!$pdf->SetFont('DejaVuSans', '', 12)) {
//     die('Font error: DejaVuSans not found');
// }
$pdf->SetFont('helvetica', '', 12);
$pdf->Cell(37, 10, $trip_price, 0);
$pdf->Cell(35, 10, $toll, 0);
$pdf->Cell(36, 10, $tax, 0);
$pdf->Cell(35, 10, $sub_total, 0);
$pdf->Ln();
$pdf->Cell(137, 10, '', 0);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->Cell(25, 13, 'Driver Bata:', 0);
$pdf->SetFont('helvetica', '', 12);
$pdf->Cell(30, 13, $bata, 0);
$pdf->Ln();
$pdf->Cell(137, 10, '', 0);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->Cell(26, 13, 'Grand Total:', 0);
$pdf->SetFont('helvetica', '', 12);
$pdf->Cell(30, 13, $total_amount, 0);
$pdf->Ln();
$pdf->Cell(75, 10, '', 0);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->Cell(24, 13, 'Pay Mode:', 0);
$pdf->SetFont('helvetica', '', 12);
$pdf->Cell(30, 13, $pay_mode, 0);
// $pdf->Ln();
// $pdf->Cell(132, 10, '', 0);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->Cell(35, 13, 'Payment Status:', 0);
$pdf->SetFont('helvetica', '', 12);
$pdf->Cell(30, 13, $pay_status, 0);

$centerX3 = 105;
$centerY3 = 268;
$pdf->SetDrawColor(0, 0, 0);
// Draw a centered horizontal line
$lineLength = 200; // Adjust the length of the line as needed
$pdf->Line($centerX3 - $lineLength / 2, $centerY3, $centerX3 + $lineLength / 2, $centerY3);
$centerX7 = 105;
$centerY7 = 207;
$pdf->SetDrawColor(0, 0, 0);
// Draw a centered horizontal line
$lineLength = 200; // Adjust the length of the line as needed
$pdf->Line($centerX7 - $lineLength / 2, $centerY7, $centerX7 + $lineLength / 2, $centerY7);

$pdf->Ln(65);
$pdf->SetFont('helvetica', '', 15);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->Cell(16, 3, 'Phone:');
$pdf->SetFont('helvetica', '', 12);
$pdf->SetTextColor(0, 0, 255);
$pdf->SetFont('', 'U');
$pdf->Write(3, '+91 9148456257', 'tel:9148456257');
$pdf->Cell(7, 3, '', 0);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(14, 3, 'Email:', 0);
$pdf->SetFont('helvetica', '', 12);
$pdf->SetTextColor(0, 0, 255);
$pdf->SetFont('', 'U');
$pdf->Write(3, 'Skydise.contact@gmail.com', 'mailto:skydise.contact@gmail.com');
$pdf->Cell(10, 3, '', 0);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(19, 3, 'Website:', 0);
$pdf->SetFont('helvetica', '', 12);
$pdf->SetTextColor(0, 0, 255);
$pdf->SetFont('', 'U');
$pdf->Write(3, 'www.Skydise.com', 'https://skydise.com');
// Output the PDF
$pdf->Output('Trip_Invoice_'.$ride_no.'.pdf', 'I');
?>