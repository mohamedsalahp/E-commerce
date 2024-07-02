<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php getTitle() ?></title>
    <link rel="stylesheet" href="<?php echo $css; ?>bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $css; ?>front.css">
    <link rel="stylesheet" href="<?php echo $css; ?>jquery-ui.css">
    <link rel="stylesheet" href="<?php echo $css; ?>jquery.selectBoxIt.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
</head>

<body>

    <div class="upper-bar">
        <div class="container">
            <?php
            if (isset($_SESSION['user'])) {  ?>

                <div class="dropdown my-info">
                    <img class="img-thumbnail img-circle" src="img2.jpg" alt="">
                    <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo $sessionUser ?>
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="profile.php">My Profile</a></li>
                        <li><a class="dropdown-item" href="newad.php">New Item</a></li>
                        <li><a class="dropdown-item" href="profile.php#my-ads">My cart</a></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </div>
            <?php
            } else {
            ?>
                <a href="login.php">
                    <span class=" ">Login/Signup</span>
                </a>
            <?php } ?>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#app-nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="app-nav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Homepage</a>
                        <?php
                        //$allCats = getAllFrom("*", "categories", "where parent = 0", "", "ID", "ASC");
                        foreach (getCat() as $cat) {
                            echo
                            '<li>
                            <a href="categories.php?pageid=' . $cat['ID'] .'">
                            ' . $cat['Name'] . '
                            </a>
                            </li>';
                        }
                        ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>