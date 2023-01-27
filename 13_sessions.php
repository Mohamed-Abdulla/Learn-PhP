<?php
/* ------------ Sessions ------------ */

/*
  Sessions are a way to store information (in variables) to be used across multiple pages.
  Unlike cookies, sessions are stored on the server.
*/

session_start(); // Must be called before accessing any session data

if (isset($_POST['submit'])) {

    // echo $_POST['name'];
    // echo $_POST['age'];

    // htmlspecialchars() - Convert special characters to HTML entities
    // $name = htmlspecialchars($_POST['name']);
    // $age = htmlspecialchars($_POST['age']);

    // filter_input() - Sanitize inputs
    // $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    // $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);


    // filter_var() - Sanitize data
    $username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    //   $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    $password = $_POST['password'];

    if ($username == 'abd' && $password == '1234') {
        // echo $name;
        // echo $age;
        $_SESSION['username'] = $username;
        header('Location:/php-crash/extras/dashboard.php');
    } else {
        echo 'Incorrect username or password';
    }

}


?>
 <!-- Pass data through a link -->
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=abd&age=20">Link</a>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <div>
        <label for="username">UserName</label>
        <input type="text" name="username">
    </div>
    <br>
    <div>
        <label>password: </label>
        <input type="password" name="password">
    </div>
    <br>
    <input type="submit" name="submit" value="Submit">
</form>