<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shiva Hospital</title>

    <!-- Stylesheets -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="./static/header/style.css">
    <link rel="stylesheet" href="./static/css/staticcss/home.css">
   <link rel="stylesheet" href="./static/css/staticcss/about.css">
    <link rel="stylesheet" href="./static/css/staticcss/testimonial.css">
    <link rel="stylesheet" href="./static/css/staticcss/ourteam.css">
    <link rel="stylesheet" href="./static/css/staticcss/gyne.css">
    <!-- <link rel="stylesheet" href="./static/css/staticcss/maternity.css"> -->
    <link rel="stylesheet" href="./static/css/staticcss/womens_health_assessment.css">
    <link rel="stylesheet" href="./static/css/staticcss/diabetes.css"> 
    <link rel="stylesheet" href="./static/css/staticcss/diagnostics.css">
     <link rel="stylesheet" href="./static/css/staticcss/ortho.css"> 
     <link rel="stylesheet" href="./static/css/staticcss/our_specialities.css"> 
     <link rel="stylesheet" href="./static/css/staticcss/contact.css">
     <link rel="icon" type="image/x-icon" href="./static/images/header/logo.jpeg">
</head>
<body >
<?php include './pages/modal/gynemodel.php';?>
<?php include './pages/modal/womenhealthmodal.php'; ?>
<?php include './static/header/header.php';?>
<div class="pagerender">
       <?php include './pages/home.php'; ?> 
</div>

<?php include './static/header/footer.php'; ?>
