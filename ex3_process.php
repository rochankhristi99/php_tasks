
<?php
include 'header.php';
?>
<div class="bg_dark  text-center ">
    <h1 class="text-white fw-bolder">EXERCISE 3</h1>
</div>
<?php
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];

echo "<div class='my-5 text-center'>
              <h3>Hello $firstname $lastname, You are welcome to my site.</h3>
          </div>";


include 'footer.php';
?>
