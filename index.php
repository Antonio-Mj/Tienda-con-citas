<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uñas</title>
    <script src="/Views/view/js/index.js"></script>
    <link rel="stylesheet" href="Views/view/css/styles-all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
            <?php
            require "Views/view/components/navbar.php";
            ?>
<body>
    <?php
    if (!isset($_GET['vista']) || $_GET['vista'] == '') {
        $_GET['vista'] = 'home';
    }

    if (is_file("Views/view/".$_GET['vista'].".php")&& $_GET['vista'] != "home" && $_GET['vista'] != "404") {
        include "Views/view/".$_GET['vista']. ".php";
    }else{
        if ($_GET['vista']== 'home') {
            include "Views/view/home.php";
        }else{
            include "Views/view/404.php";
        }
    }
    ?>
</body>
</html>