<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $secret_code = $_POST['secret_code'];
    $phone_number = $_POST['phone_number'];
    $email_address = $_POST['email_address'];
    $quantity = $_POST['quantity'];
    $volume = $_POST['volume'];
    $search_query = $_POST['search_query'];
    $week = $_POST['week'];
    $website_url = $_POST['website_url'];
    $event_datetime = $_POST['event_datetime'];
    $month = $_POST['month'];
    $time = $_POST['time'];

    echo '<!DOCTYPE html>
    <html>
      <head>
      <meta charset="UTF-8" />
      <meta name="author" content="Mertcan Kuzey" />
      <meta name="description" content="This is a website for CPE212-HW3" />
      <meta name="generator" content="Kuzey Software" />
      <meta name="keywords" content="input types, input, types" />
        <title>Submitted Form Data</title>
        <style>
          body {
            font-family: Arial, sans-serif;
            margin: 20px;
          }

          h1 {
            text-align: center;
          }

          p {
            margin: 5px 0;
          }
        </style>
      </head>
      <body>
        <h1>Submitted Form Data</h1>
        <p><strong>Secret Code:</strong> ' . $secret_code . '</p>
        <p><strong>Phone Number:</strong> ' . $phone_number . '</p>
        <p><strong>Email Address:</strong> ' . $email_address . '</p>
        <p><strong>Quantity:</strong> ' . $quantity . '</p>
        <p><strong>Volume:</strong> ' . $volume . '</p>
        <p><strong>Search Query:</strong> ' . $search_query . '</p>
        <p><strong>Week:</strong> ' . $week . '</p>
        <p><strong>Website URL:</strong> ' . $website_url . '</p>
        <p><strong>Event Date and Time:</strong> ' . $event_datetime . '</p>
        <p><strong>Month:</strong> ' . $month . '</p>
        <p><strong>Time:</strong> ' . $time . '</p>
      </body>
    </html>';

} else {

    header("Location: input_types.html");
    exit();
}
?>
