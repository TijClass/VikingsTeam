<?php
include './contexts/init.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The future is for riders - Zoox</title>
    <link rel="stylesheet" href="public/styles/main.css" />
    <link rel="icon" href="public/assets/img/favicon.svg">
    <script defer src="https://use.fontawesome.com/releases/v5.15.2/js/all.js" integrity="sha384-vuFJ2JiSdUpXLKGK+tDteQZBqNlMwAjhZ3TvPaDfN9QmbPb7Q8qUpbSNapQev3YF" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="src/assets/js/script.js" defer></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script> -->
    <script src="public/assets/js/jquery.cookie.js" defer></script>


</head>

<body class="scrollbar-hide">
    <!-- all page -->
    <div class="flex">
        <!-- for sidebar -->
        <div class="h-screen top-0 sticky">
            <?php
            include './components/sidebar.php';
            ?>
        </div>
        <!-- for all other components -->
        <div class="flex-grow">
            <?php
            include './pages/main.php';
            ?>
        </div>
    </div>
    <!-- end all page -->
</body>

</html>