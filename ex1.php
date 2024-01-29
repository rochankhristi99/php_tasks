    <?php include 'header.php'; ?>

    <div class="body_sec pb-5">

        <h3>
            3.1 Write PHP code to output the following message
            Hello world! My name is "David"
        </h3>

        <?php
        echo "Hello world! My name is \"David\"";
        ?>
<br><br>
        <h3>
            3.2 Create a PHP variable named $title and assign it the value "PHP is interesting." Then, use this
            variable as the content within an <h4> (heading 4) element.
        </h3>

        <?php
        $title = "PHP is intresting.";
        echo "<h4>$title</h4>"
            ?>

<br>
        <h3>
            3.3 Define three variables: $g1 = 5, $g2 = 4, and $g3 = 5. These variables represent the grades of three
            students in the course. To display this information, create an HTML table within your PHP code. The
            table should be structured with columns for Serial Number (S.n.), Name, and Grade, and it should look
            like this:
        </h3>

        <?php
        $g1 = 5;
        $g2 = 4;
        $g3 = 5;
        ?>
<br>
        <table class="table">
            <tr>
                <th>
                    S.N
                </th>
                <th>
                    Name
                </th>
                <th>
                    Grade
                </th>
            </tr>
            <tr>
                <td>
                    2
                </td>
                <td>
                    John
                </td>
                <td>
                    <?php echo $g1 ?>
                </td>
            </tr>
            <tr>
                <td>
                    2
                </td>
                <td>
                    Alice
                </td>
                <td>
                    <?php echo $g2 ?>
                </td>
            </tr>
            <tr>
                <td>
                    3
                </td>
                <td>
                    Bob
                </td>
                <td>
                    <?php echo $g3 ?>
                </td>
            </tr>
        </table>

        <br>
        <h3>
            3.4 Take a screenshot that confirms your development environment setup and include it as an image in the
            "ex1.php" file
        </h3>
        <br>
        <img src="images/img1.png" class="w-75" />


    </div>
    <?php include 'footer.php'; ?>
