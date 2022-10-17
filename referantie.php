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
    <link rel="stylesheet" href="css/referantie.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Opendag Mbo Utrecht</title>
</head>

<body class="home">


    <header>
        <a href="index.php" class="logo">MboUtrecht</a>

        <nav>
            <ul>
                <li><a class="active" href="index.php">home</a></li>
                <li><a href="course.html">courses</a></li>

                <li><a href="">informatie</a>
                    <ul>
                        <li><a href="about.php">about</a></li>
                        <li><a href="contact.php">contact</a></li>
                        <li><a href="referantie.php">referantie</a></li>


                    </ul>
                <li><a href="">Plattegrond</a>
                    <ul>
                        <li><a href="./verdieping3.html" class="btn purple">Verdieping 3</a></li>
                        <li><a href="./verdieping4.html" class="btn purple">Verdieping 4</a></li>


                    </ul>
                <li><a href="">registreren?</a>
                    <ul>
                        <li><a href="register.php">registreer</a></li>
                        <li><a href="login.php">Login</a></li>
                    </ul>
            </ul>
        </nav>
    </header>

  <section class="ref_background">

    <!-- Input Section -->
    <section>
      <div class="containter">
        <div class="row input">
          <form action="aanmaken.php" method="post">
            <input placeholder="Voornaam" type="text" name="firstname" id="inputFirstname" required><br>

            <input placeholder="Tussenvoegsel" type="text" name="insertion" id="inputInsertion"><br>

            <input placeholder="Achternaam" type="text" name="lastname" id="inputLastname" required><br>

            <input placeholder="Wat vind je van het opleiding" type="text" name="opinion" id="inputOpinion" required><br>

            <input placeholder="Zou je voor het opleiding willen inschrijven" type="text" name="opinion2" id="inputOpinion2" required><br>


            <input type="submit" value="Verzenden" class="form-control btn btn-outline-succesq"><br>
          </form>

        </div>
      </div>
    </section>

    <section class="review">
      <table class="table-review">
        <tr class="tr-review">
          <th>Voornaam</th>
          <th>Tussenvoegsel</th>
          <th>Achternaam</th>
          <th>Wat vind je van het opleiding</th>
          <th>Zou je voor het opleiding willen inschrijven</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "proprak-login");
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT firstname, insertion, lastname, opinion, opinion2 FROM users";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          // output data of each row
          while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["firstname"] . "</td><td>" . $row["insertion"] . "</td><td>" . $row["lastname"] . "</td><td>" . $row["opinion"] . "</td><td>" . $row["opinion2"] . "</td></tr>";
          };
        }
        $conn->close();
        ?>
      </table>
    </section>

  </section>


  <footer>
    <div class="footer-content">
      <h3> © 2022 MBO Utrecht :</h3>
      <p>MboUtrecht.nl</p>
      <ul class="socials">
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
      </ul>
    </div>
    <div class="footer-bottom">
      <p>copyright &copy; <a href="#">MBO Utrecht</a> </p>
      <div class="footer-menu">
        <ul class="f-menu">


        </ul>
      </div>
    </div>

  </footer>



</body>

<script src="./js/app.js"></script>

</html>