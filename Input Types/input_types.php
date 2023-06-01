<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="author" content="Mertcan Kuzey" />
    <meta name="description" content="This is a website for CPE212-HW3" />
    <meta name="generator" content="Kuzey Software" />
    <meta name="keywords" content="input types, input, types" />
    <title>Input Types</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 20px;
      }

      h1 {
        text-align: center;
      }

      form {
        max-width: 400px;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
      }

      label {
        display: block;
        margin-top: 10px;
      }

      input[type="submit"] {
        display: block;
        margin-top: 20px;
        padding: 10px 20px;
        background-color: #4caf50;
        color: #fff;
        border: none;
        cursor: pointer;
      }

      input[type="submit"]:hover {
        background-color: #45a049;
      }

      input[type="text"],
      input[type="tel"],
      input[type="email"],
      input[type="number"],
      input[type="range"],
      input[type="search"],
      input[type="week"],
      input[type="url"],
      input[type="datetime-local"],
      input[type="month"],
      input[type="time"] {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
      }

      input[type="text"]:focus,
      input[type="tel"]:focus,
      input[type="email"]:focus,
      input[type="number"]:focus,
      input[type="range"]:focus,
      input[type="search"]:focus,
      input[type="week"]:focus,
      input[type="url"]:focus,
      input[type="datetime-local"]:focus,
      input[type="month"]:focus,
      input[type="time"]:focus {
        outline: none;
        border-color: #4caf50;
      }
    </style>
  </head>
  <body>
    <h1>Input Types Example</h1>

    <form action="submit.php" method="POST">
      <label for="secret_code">Secret Code:</label>
      <input type="hidden" name="secret_code" value="1234" />

      <label for="phone_number">Phone Number:</label>
      <input type="tel" name="phone_number" pattern="[0-9]{10}" required />

      <label for="email_address">E-mail Address:</label>
      <input type="email" name="email_address" required />

      <label for="quantity">Quantity:</label>
      <input
        type="number"
        name="quantity"
        min="1"
        max="10"
        step="1"
        value="1"
        required
      />

      <label for="volume">Volume:</label>
      <input type="range" name="volume" min="0" max="100" step="1" value="50" />

      <label for="search_query">Search Query:</label>
      <input type="search" name="search_query" />

      <label for="week">Week:</label>
      <input type="week" name="week" />

      <label for="website_url">Website URL:</label>
      <input type="url" name="website_url" required />

      <label for="event_datetime">Event Date and Time:</label>
      <input type="datetime-local" name="event_datetime" value="2023-06-01T10:00" />

      <label for="month">Month:</label>
      <input type="month" name="month" value="2000-01" />

      <label for="time">Time:</label>
      <input type="time" name="time" value="12:00" />

      <input type="submit" value="Submit" />
    </form>
  </body>
</html>
