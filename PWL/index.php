<?php
session_start();
include_once 'Controller/userController.php';
include_once 'Controller/pomController.php';
include_once 'Controller/kendaraanController.php';

include_once 'dao/userDAO.php';
include_once 'dao/pomDAO.php';
include_once 'dao/kendaraanDAO.php';
include_once 'dao/jenisDAO.php';

include_once 'entity/user.php';
include_once 'entity/role.php';
include_once 'entity/pombensin.php';
include_once 'entity/role.php';
include_once 'entity/user.php';

include_once 'util/PDOUtil.php';

if (!isset($_SESSION['my_session'])) {
    $_SESSION['my_session'] = false;
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <title>PHP Navigation and Send Data</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <link rel="stylesheet" type="text/css" href="css/web_style.css">
    <link rel="stylesheet" type="text/css" href="css/datatables.css">

    <script type="text/javascript" src="js/functional_js.js"></script>
    <script type="text/javascript" src="command_script.js"></script>
</head>
<body>
<!--Tag for header-->
<header>
    <h1>Web Pom ANS</h1>
</header>
<!--Tag for navigation-->
<nav>
    <ul>
        <li><a href="?navito=home">Home</a></li>
        <li><a href="?navito=pom">Daftar Pom</a></li>
        <?php if ($_SESSION['my_session'] == FALSE || $_SESSION['session_role'] == 1) { ?>
            <li><a href="?navito=register">Register</a></li>
        <?php } ?>
        <?php if ($_SESSION['my_session'] == TRUE) { ?>
            <?php if ($_SESSION['session_role'] != 1) { ?>
                <li><a href="?navito=kendaraan">Kendaraan</a></li>
            <?php }?>
            <?php if ($_SESSION['session_role'] == 1) { ?>
                <li><a href="?navito=setprice">Set Price</a></li>
            <?php }?>
            <li><a href="?navito=logout">Logout</a></li>
        <?php }?>

    </ul>

</nav>
<div style="clear:both;"></div>
<!--Tag for content-->
<main>
    <?php
    $nav = filter_input(INPUT_GET, "navito");

    switch ($nav) {
        case 'logout':
            $userConn = new userController();
            $userConn->logout();
            break;
        case 'register':
            $userConn = new userController();
            $userConn->signup();
            break;
        case 'pom':
            $pom = new pomController();
            $pom->index();
            break;
        case 'setprice':
            include_once './setprice.php';
            break;
        case 'kendaraan':
            $kend= new kendaraanController();
            $kend->index();
            break;
        default:
        {
            if ($_SESSION['my_session']) {
                include_once 'home.php';
            } else {
                $userConn = new userController();
                $userConn->index();
            }
        }
    }
    ?>
</main>

<!--Tag for footer-->
<footer>
    Created by 1872063 Weddy Alvino
</footer>

<!-- Jquery JS-->
<script src="vendor/jquery/jquery.min.js"></script>
<!-- Vendor JS-->
<script src="vendor/select2/select2.min.js"></script>
<script src="vendor/datepicker/moment.min.js"></script>
<script src="vendor/datepicker/daterangepicker.js"></script>

<!-- Main JS-->
<script src="js/global.js"></script>

<!-- Datatable -->
<script type="text/javascript" src="js/datatables.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#tableId').DataTable();
    });
</script>
</body>
</html>
