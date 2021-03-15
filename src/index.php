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

</head>

<body>
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
    <script src="public/assets/js/main.js"></script>
</body>

</html>
