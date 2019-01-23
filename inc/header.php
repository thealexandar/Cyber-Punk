<?php 
require_once 'app/init.php';

$itemsQuery = $db->prepare("
    SELECT id, name, done
    FROM items
    WHERE user = :user
    ORDER BY created DESC
");
$itemsQuery->execute([
    'user' => $_SESSION['user_id']
]);
// Check row count
$items = $itemsQuery->rowCount() ? $itemsQuery : [];




?>

<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <title>To Do List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">

  </head>
    <body class="d-flex flex-column">
        <!-- Begin page content -->
      <main role="main" class="flex-shrink-0 text-center">
        <div class="container text-center">
          <div class="col-12 text-center mb-5">
            <h1 class="mb-0 fromCenter">Cyber Punk</h1>
            <h3 class="fromCenter">To Do List</h3>
          </div>