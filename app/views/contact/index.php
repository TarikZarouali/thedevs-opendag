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


    <form action="contact.php" method="post" class="contact_form">
        <div class="elem-group">
            <label for="name">Your Name</label>
            <input type="text" id="name" name="visitor_name" placeholder="Abdullatif Ahmad" pattern=[A-Z\sa-z]{3,20} required>
        </div>
        <div class="elem-group">
            <label for="email">Your E-mail</label>
            <input type="email" id="email" name="visitor_email" placeholder="Abdullatif.Ahmad@gmail.com" required>
        </div>
        <div class="elem-group">
            <label for="department-selection">Choose Concerned Department</label>
            <select id="department-selection" name="concerned_department" required>
                <option value="">Select a Department</option>
                <option value="billing">Billing</option>
                <option value="marketing">Marketing</option>
                <option value="technical support">Technical Support</option>
            </select>
        </div>
        <div class="elem-group">
            <label for="title">Reason For Contacting Us</label>
            <input type="text" id="title" name="email_title" required placeholder="Unable to Reset my Password" pattern=[A-Za-z0-9\s]{8,60}>
        </div>
        <div class="elem-group">
            <label for="message">Write your message</label>
            <textarea id="message" name="visitor_message" placeholder="Say whatever you want." required></textarea>
        </div>
        <button type="submit">Send Message</button>
    </form>
    <style>
        <?php include 'CSS/main.css'; ?>
    </style>
</body>

</html>