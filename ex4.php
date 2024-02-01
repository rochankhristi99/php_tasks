<?php

$title = "Exercise 4: Control flow and loops";
include 'header.php';

?>

<div class="bg_dark  text-center ">
    <h1 class="text-white fw-bolder">EXERCISE 4</h1>
</div>


<div class="body_sec pb-5 justify-content-center row">


    <!--4.2-->
    <h5>4.2 If-Else: Write a PHP script to get inputs (age and name) from the user and based on their age, decide if
        he/she
        is eligible for voting. (18 or more than 18 years is eligible for voting, use form to get user input).</h5>

    <form class="w-50" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <label class="form-label">Age</label>
            <input type="text" class="form-control" name="age">
        </div>


        <button type="submit" name="form1" class="btn btn-primary">Submit</button>

        <div class="mt-3">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['form1'])) {

                $name = $_POST["name"];
                $age = $_POST["age"];

                if (is_numeric($age)) {

                    if ($age >= 18) {
                        echo "<p class='text-success'>" . $name . ", You are eligible to vote.</p>";
                    } else {
                        echo "<p class='text-danger'>" . $name . ", You are not eligible to vote.</p>";
                    }
                } else {
                    echo "<p>Please enter a valid age.</p>";
                }
            }
            ?>
        </div>
    </form>

    <!---->

    <!--4.3--><hr>
    <h5>4.3 Switch Case: Write a PHP script that gets the current month and prints one of the following responses,
        depending on whether it's August or not:</h5>


    <?php
    $currMonth = date("F");

    switch ($currMonth) {
        case 'August':
            echo "It's August, so it's still holiday.";
            break;
        default:
            echo "Not August, this is " . $currMonth . " so I don't have any holidays.";
            break;
    }
    ?>
    <!---->

    <!--4.4--><hr>
    <h5>
        4.4 For Loop: Write a PHP script that will print the multiplication table of a number (n, use form to get user
        input).
    </h5>


    <form class="w-50" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="mb-3">
            <label class="form-label">Enter Number</label>
            <input type="text" class="form-control" name="number">
        </div>

        <button type="submit" name="form2" class="btn btn-primary">Submit</button>

        <div class="mt-3">
            <table class="table">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['form2'])) {
                    $number = $_POST["number"];

                    echo "<h5>Multiplication Table of $number:</h2>";
                    for ($i = 1; $i <= 10; $i++) {
                        echo "<tr><td>$number</td>   <td> x </td>  <td> $i </td> <td>=</td> <td>" . ($number * $i) . "</td></tr>";

                    }

                }
                ?>
            </table>
        </div>
    </form>
    <!---->

    <!--4.5--><hr>
    <h5>
        4.5 While Loop: Write a PHP script that will print all the numbers from 1 to n. (use form to get user input).
    </h5>


    <form class="w-50" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="mb-3">
            <label class="form-label">Enter Number</label>
            <input type="text" class="form-control" name="number2">
        </div>

        <button type="submit" name="form3" class="btn btn-primary">Submit</button>

        <div class="mt-3">
            <table class="table">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['form3'])) {
                    $n = $_POST["number2"];
                    $i = 1;
                    while ($i <= $n) {
                        echo "$i ";
                        $i++;
                    }

                }
                ?>
            </table>
        </div>
    </form>
    <!---->

    <!--4.6--><hr>
    <h5>
        4.6 Foreach Loop: Write a PHP script that will print all the elements of an array. $myarray=("HTML", "CSS",
        "PHP", "JavaScript").
        <hr>
    </h5>



    <?php
    $myarray = array("HTML", "CSS", "PHP", "JavaScript");

    foreach ($myarray as $element) {
        echo "$element<br>";
    }
    ?>

    <!---->


</div>


<?php

include 'footer.php'; ?>