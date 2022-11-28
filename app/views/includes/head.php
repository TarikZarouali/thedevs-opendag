<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/grid.css">
    <title>Opendag Mbo Utrecht</title>
</head>

<body class="home">
    <script src="https://kit.fontawesome.com/4393ca507d.js" crossorigin="anonymous"></script>
    <div class="wrapper">
        <div class="navbar">

            <ul>
                <li><a href="<?= URLROOT; ?>homepages" class="a_parent active">
                        <div class="wrap">
                            <span class="icon">
                                <i class="fas fa-home" aria-hidden="true"></i>
                            </span>
                            <span class="text">Home</span>
                        </div>
                    </a></li>
                <li><a href="<?= URLROOT; ?>course" class="a_parent">
                        <div class="wrap">
                            <span class="icon">
                                <i class="fa-solid fa-book" aria-hidden="true"></i>
                            </span>
                            <span class="text">Course</span>
                        </div>
                    </a>

                </li>
                <li><a href="#" class="a_parent">
                        <div class="wrap">
                            <span class="icon">
                                <i class="fa-light fa-question" aria-hidden="true"></i>
                            </span>
                            <span class="text">Informatie</span>
                        </div>
                    </a>
                    <div class="dd_menu">
                        <ul>
                            <li>
                                <a href="<?= URLROOT; ?>About" class="dd_menu_a">
                                    <div class="wrap">
                                        <span class="icon">
                                            <i class="fas fa-running" aria-hidden="true"></i>
                                        </span>
                                        <span class="text">
                                            About
                                        </span>
                                    </div>
                                </a>

                            </li>
                            <li>
                                <a href="contact.php" class="dd_menu_a">
                                    <div class="wrap">
                                        <span class="icon">
                                            <i class="fa-regular fa-address-card" aria-hidden="true"></i>
                                        </span>
                                        <span class="text">Contact</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="referantie.php" class="dd_menu_a">
                                    <div class="wrap">
                                        <span class="icon">
                                            <i class="fa-thin fa-question" aria-hidden="true"></i>
                                        </span>
                                        <span class="text">vragen</span>
                                    </div>
                                </a>
                            </li>
                            <li>

                            </li>
                        </ul>
                    </div>
                </li>

                <li><a href="#" class="a_parent">
                        <div class="wrap">
                            <span class="icon">
                                <i class="fa-solid fa-map" aria-hidden="true"></i>
                            </span>
                            <span class="text">plattegrond</span>
                        </div>
                    </a>
                    <div class="dd_menu">
                        <ul>
                            <li>
                                <a href="<?= URLROOT; ?>plattegrond1" class="dd_menu_a">
                                    <div class="wrap">

                                        <span class="text">
                                            Verdieping 1
                                        </span>
                                    </div>
                                </a>

                            </li>
                            <li>
                                <a href="<?= URLROOT; ?>plattegrond2" class="dd_menu_a">
                                    <div class="wrap">

                                        <span class="text">verdieping 2</span>
                                    </div>
                                </a>
                            </li>
                            <li>

                            </li>
                        </ul>
                    </div>
                </li>
                <li><a href="login.php" class="a_parent">
                        <div class="wrap">
                            <span class="icon">
                                <i class="fas fa-cog" aria-hidden="true"></i>
                            </span>
                            <span class="text">Registreren</span>
                        </div>

                    </a>
                </li>
                <?php if (!isset($_SESSION['usersId'])) : ?>
                    <a href="<?= URLROOT; ?>register">
                        <li>Sign Up</li>
                    </a>
                    <a href="login.php">
                        <li>Login</li>
                    </a>
                <?php else : ?>
                    <a href="./controllers/Users.php?q=logout">
                        <li>Logout</li>
                    </a>
                <?php endif; ?>

            </ul>
        </div>
    </div>