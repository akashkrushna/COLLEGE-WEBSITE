<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link Bootstrap Css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Link Custom Css -->
    <link rel="stylesheet" href="css/style.css">
    <title>College Website | EasyCoding</title>
</head>

<body>
    <!-- Navbar Section Start -->
    <nav class="navbar navbar-expand-sm fixed-top">
        <a href="" class="navbar-brand"><span>E</span>asy College</a>
        <div>
            <ul class="navbar-nav">
                <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>

                <li class="nav-item"><a href="college_fest.php" class="nav-link">college Fest</a></li>
                <!-- Some PHP code Start -->
                <?php
                if (!isset($_SESSION)) {
                    session_start();
                }
                if (isset($_SESSION['is_true'])) {
                    echo '
                 <li class="nav-item"><a href="./database/logout.php" class="nav-link">logout</a></li>

                 <li class="nav-item"><a href="./admission.php" class="nav-link btn btn-danger btn-sm"  >Admission</a></li>
                  ';
                } else {
                    echo '
                <li class="nav-item"><a href="" data-toggle="modal" data-target="#user_login" class="nav-link">login</a></li>

                <li class="nav-item"><a href="create_account.php" class="nav-link">create Account</a></li>
                <li class="nav-item"><a href="" class="nav-link btn btn-danger btn-sm" data-target="#college_virtual_tour" data-toggle="modal">Tour</a></li>

                 ';
                }
                ?>
                <!-- Some PHP code End -->










            </ul>
        </div>
    </nav>
    <!-- Navbar Section End -->