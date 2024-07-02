
<?php
session_start();
if (isset($_SESSION['Username'])) {
    $pageTitle = 'Dashboard';

    include 'init.php';

   // print_r($_SESSION);

    include $tpl . 'footer.php';

} else {
   // echo 'YOU ARE NOT Authorized ot view this page';

    header('Location: index.php');
    exit();
}
