<?php
/* --- Sanitizing Inputs -- */

/*
  Data submitted through a form is not sanitized by default. We have methods to sanitize data manually.
*/

if(isset($_POST['submit'])){

    // echo $_POST['name'];
    // echo $_POST['age'];

// htmlspecialchars() - Convert special characters to HTML entities
    // $name = htmlspecialchars($_POST['name']);
    // $age = htmlspecialchars($_POST['age']);

      // filter_input() - Sanitize inputs
    // $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    // $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);


     // filter_var() - Sanitize data
  $name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    echo $name;
    echo $age;
}


?>
 <!-- Pass data through a link -->
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=abd&age=20">Link</a>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <div>
        <label for="name">Name</label>
        <input type="text" name="name">
    </div>
    <br>
    <div>
        <label>age: </label>
        <input type="text" name="age">
    </div>
    <br>
    <input type="submit" name="submit" value="Submit">
</form>