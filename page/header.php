<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/themify-icons/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="css/sweetalert/sweetalert2.css">
    <link rel="stylesheet" type="text/css" href="css/aos/aos.css">
    <link rel="stylesheet" type="text/css" href="css/mycss.css">

    <?php
    $page = @$_GET['page'];
    switch ($page) {

        case 'kontak':
            echo '<link rel="stylesheet" type="text/css" href="css/page_css/kontak_us.css">';
            echo '<link rel="stylesheet" type="text/css" href="css/leaflet/leaflet.css" />';
            break;

        case 'info_user':
            echo '<link rel="stylesheet" type="text/css" href="css/page_css/info_user.css">';
            break;

        case 'about_us':
            echo '<link rel="stylesheet" type="text/css" href="css/page_css/about_us.css">';
            break;

        default:
            echo '';
            break;
    }
    ?>

    <link rel="shortcut icon" href="assets/logo/logo.png" type="image/x-icon">
    <title>Roda Indonesia</title>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top py-3" id="header_nav">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="assets/logo/logo.png" width="80px" alt="">
            </a>
            <button class="navbar-toggler me-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item mt-3 mt-md-0">
                        <a class="nav-link" href="?page=about_us">Tentang Kami</a>
                    </li>
                    <li class="nav-item mt-3 mt-md-0 dropdown">
                        <a class="nav-link dropdown-toggle" href="?page=about_us" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Projek
                        </a>
                        <ul class="dropdown-menu dropdown-menu-white" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="?page=projek_ribike">RIBike</a></li>
                            <li><a class="dropdown-item" href="?page=projek_ricar">RICar</a></li>
                            <li><a class="dropdown-item" href="?page=projek_ripublic">RIPublic</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="?page=projek_rimart">RIMart</a></li>
                            <li><a class="dropdown-item" href="?page=projek_rifood">RIFood</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="?page=projek_risend">RISend</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="?page=projek_ritrip">RITrip</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="?page=projek_ridu">RIDu</a></li>
                            <li><a class="dropdown-item" href="?page=projek_richat">RIChat</a></li>
                        </ul>
                    </li>
                    <li class="nav-item mt-3 mt-md-0">
                        <a class="nav-link" href="?page=info_driver">Info Driver</a>
                    </li>
                    <li class="nav-item mt-3 mt-md-0">
                        <a class="nav-link" href="?page=info_user">Info User</a>
                    </li>
                    <li class="nav-item mt-3 mt-md-0">
                        <a class="nav-link" href="?page=kontak">Kontak</a>
                    </li>
                </ul>
            </div>
            <button type="button" class="btn btn-danger">Download</button>
        </div>
    </nav>
    <!-- Akhir Navbar -->