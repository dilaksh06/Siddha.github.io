<?php
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $herb_name = $_POST['exampleFormControlInput1'] ?? '';
    $notes = $_POST['exampleFormControlTextarea1'] ?? '';
    $kyc = $_POST['exampleFormControlTextarea2'] ?? '';


    // Create folder name using the current date and herb name
    $folder_name = date('Y-m-d') . '-' . date('H-i-s') . '-' . $herb_name;

    // Create folder if it doesn't exist
    if (!file_exists($folder_name)) {
        mkdir($folder_name);
    }

    // Handle file uploads
    if (!empty($_FILES['formFile'])) {
        $file_count = count($_FILES['formFile']['name']);

        for ($i = 0; $i < $file_count; $i++) {
            $temp_file = $_FILES['formFile']['tmp_name'][$i];
            $file_name = $_FILES['formFile']['name'][$i];
            move_uploaded_file($temp_file, $folder_name . '/' . $file_name);
        }

        // Create and write content to the text file
    $text_file_content = "Herb Name: " . $herb_name . "\r\n\r\nNotes: " . $notes. "\r\n\r\ndetail shared by:". $kyc;
    file_put_contents($folder_name . '/herb_info.txt', $text_file_content);
        // Set success message
        $message = "Images successfully uploaded!";

        
    }
   
    header("Location: index.html");
    exit();

}
?>

