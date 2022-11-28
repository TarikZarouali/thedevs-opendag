<?php


class Register
{

    private $registerModel;

    public function __construct()
    {
        $this->registerModel = new User;
    }

    public function register()
    {
        //Process form

        //Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        //Init data
        $data = [
            'usersName' => trim($_POST['usersName']),
            'usersEmail' => trim($_POST['usersEmail']),
            'usersUid' => trim($_POST['usersUid']),
            'usersPwd' => trim($_POST['usersPwd']),
            'pwdRepeat' => trim($_POST['pwdRepeat'])
        ];

        //Validate inputs
        if (
            empty($data['usersName']) || empty($data['usersEmail']) || empty($data['usersUid']) ||
            empty($data['usersPwd']) || empty($data['pwdRepeat'])
        ) {
            flash("register", "Please fill out all inputs");
            redirect("/views/signup/index.php");
        }

        if (!preg_match("/^[a-zA-Z0-9]*$/", $data['usersUid'])) {
            flash("register", "Invalid username");
            redirect("/views/signup/index.php");
        }

        if (!filter_var($data['usersEmail'], FILTER_VALIDATE_EMAIL)) {
            flash("register", "Invalid email");
            redirect("/views/signup/index.php");
        }

        if (strlen($data['usersPwd']) < 6) {
            flash("register", "Invalid password");
            redirect("/views/signup/index.php");
        } else if ($data['usersPwd'] !== $data['pwdRepeat']) {
            flash("register", "Passwords don't match");
            redirect("/views/signup/index.php");
        }

        //User with the same email or password already exists
        if ($this->userModel->findUserByEmailOrUsername($data['usersEmail'], $data['usersName'])) {
            flash("register", "Username or email already taken");
            redirect("/views/signup/index.php");
        }

        //Passed all validation checks.
        //Now going to hash password
        $data['usersPwd'] = password_hash($data['usersPwd'], PASSWORD_DEFAULT);

        //Register User
        if ($this->userModel->register($data)) {
            redirect("/views/signup/index.php");
        } else {
            die("Something went wrong");
        }
    }
}
