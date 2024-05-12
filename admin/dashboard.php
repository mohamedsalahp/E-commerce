
<?php
session_start();
if (isset($_SESSION['Username'])) {
    include 'init.php';
    echo 'hi';
    include $tpl . 'footer.php';
} else {
   // echo 'YOU ARE NOT Authorized ot view this page';

    header('Location: index.php');
    exit();
}
