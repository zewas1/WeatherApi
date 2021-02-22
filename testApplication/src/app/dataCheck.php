<?php

$apiKey = $_POST['apiKey'];
$city = $_POST['city'];

function checkData(){
    if (isset($_GET['formInformation'])) {
        if (isset($_POST['submit'])) {
            if (empty($_POST['apiKey'])) {
                $errorMessage = 'Please enter an API key';
            } else if (empty($_POST['city'])) {
                $errorMessage = 'Please enter a city name';
            }
        } else {
            echo "Form is submitted successfully.";
        }
    }
}
?>

