<?php
include "./Model/db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- meta tags -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <!-- font-awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- link to Font-Family and CSS Files -->
  <link rel="stylesheet" href="/css/style.css" />
  <!-- Document Title -->
  <title>Document</title>
</head>

<body>
  <header class="container py-5">
    <form action="index.php" method="GET">
      <select class="form-select" aria-label="Default select example" name="parking">
        <option value="all">Parking</option>
        <option value="1">YES</option>
        <option value="0">NO</option>
      </select>
      <select class="form-select" aria-label="Default select example" name="voting">
        <option value="all">Vote</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
        <option value="4">Four</option>
        <option value="5">Five</option>
      </select>
      <button class="btn" type="submit">Filter</button>
    </form>
  </header>