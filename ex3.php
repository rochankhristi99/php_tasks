<?php

$title = "Exercise 3: Variable, Strings & Operators";
include 'header.php';

?>

<div class="bg_dark  text-center ">
    <h1 class="text-white fw-bolder">EXERCISE 3</h1>
</div>


<div class="body_sec pb-5 justify-content-center row">


    <!--3.2-->
    <h5>3.2 Form Creation: Create a simple HTML form to collect the user’s Firstname and Lastname. Use the echo
        statement to print “Hello [Firstname] [Lastname], You are welcome to my site.” inside an third heading style
        tag.</h5>

    <form class="w-50" method="POST" action="ex3_process.php">
        <div class="mb-3">
            <label class="form-label">First Name</label>
            <input type="text" class="form-control" name="fname">
        </div>
        <div class="mb-3">
            <label class="form-label">Last Name</label>
            <input type="text" class="form-control" name="lname">
        </div>
      

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <!---->


    <!--3.5-->
    <h5 class="mt-5">3.5 String Variables: Write a PHP script with two string variables ($str1 = "Hello"; $str2 =
        "World";). Join them together and print the length of the string.</h5>
    <?php
    $str1 = "Hello";
    $str2 = "World";

    $strConcat = $str1 . $str2;
    echo "Joined String: " . $strConcat . "<br>";

    echo "Length of the String: " . strlen($strConcat);
    ?>

    <!--3.5-->



    <!--3.6-->
    <h5 class="mt-5">3.6 Number Addition: Write a script to add up the numbers: 298, 234, 46. Use variables to store
        these numbers and an echo statement to output your answer.</h5>
    <?php
    $no1 = 298;
    $no2 = 234;
    $no3 = 46;


    $addition = $no1 + $no2 + $no3;

    echo "The result is " . $addition;

    ?>
    <!--3.6-->

    <!--3.8-->
    <h5 class="mt-5">3.7 Browser Detection: Write a PHP script to detect the browser being used to view your pages.
        Hint: Use predefined variables: $_SERVER. </h5>
    <?php

    $browser = $_SERVER['HTTP_USER_AGENT'];

    if (strpos($browser, 'Firefox') !== false) {
        echo "You are using Firefox.";
    } elseif (strpos($browser, 'Chrome') !== false) {
        echo "You are using Chrome.";
    } elseif (strpos($browser, 'Edge') !== false) {
        echo "You are using Microsoft Edge.";
    } else {
        echo "Unable to detect...";
    }

    ?>
    <!---->
</div>


<?php

include 'footer.php'; ?>
