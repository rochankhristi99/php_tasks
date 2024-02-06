<?php

$title = "Exercise 7: CRUD APP";
include '../php_tasks/header.php';

?>

<div class="bg_dark  text-center ">
    <h1 class="text-white fw-bolder">EXERCISE 7</h1>
</div>

<?php
// Check if the 'submit' button in the form was clicked
if (isset($_POST['submit'])) {
    // Retrieve data from the form and store it in variables
    $fname = $_POST['fname'];     // First name
    $lname = $_POST['lname'];     // Last name
    $city = $_POST['city'];       // City
    $groupid = $_POST['groupid']; // Group ID

    // Include the database connection file
    include 'db.php';

    // Define an SQL query to insert data into the 'studentsinfo' table
    $sql = "INSERT INTO studentsinfo (first_name, last_name, city, groupid)
            VALUES ('$fname', '$lname', '$city', '$groupid')";

    // Execute the SQL query using the database connection
    if ($conn->query($sql) === TRUE) {
        // If the query was successful, display a success message
        echo "<div class='alert alert-success' role='alert'>New record added.</div>";
    } else {
        // If there was an error in the query, display an error message
        echo "<div class='alert alert-success' role='alert'>Error: " . $sql . "<br>". $conn->error."</div>";
    }

    // Close the database connection
    $conn->close();
}

?>

<div class="body_sec pb-5 justify-content-center row">



    <h5>To understand the concept of CRUD, we will create a simple PHP application that demonstrates the fundamental
        operations of CRUD (Create, Read, Update, Delete) using a MySQL database.</h5>

    <form class="w-50" method="POST" name="form1" action="">
        <div class="form-group my-5">
            <div class="row">
                <div class="col">
                    <label for="fname">First Name:</label>
                    <input type="text" class="form-control" id="fname" placeholder="Enter your first name" name="fname"
                        required>
                </div>
                <div class="col">
                    <label for="lname">Last Name:</label>
                    <input type="text" class="form-control" id="lname" placeholder="Enter your last name" name="lname"
                        required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="city">City:</label>
                    <input type="text" class="form-control" id="city" placeholder="Enter your city" name="city"
                        required>
                </div>
                <div class="col">
                    <label for="groupid">Group ID:</label>
                    <select class="form-control" id="groupid" name="groupid">
                        <option value="BBCAP19">BBCAP19</option>
                        <option value="BBCAP20">BBCAP20</option>
                        <option value="BBCAP21">BBCAP21</option>
                        <option value="BBCAP22">BBCAP22</option>
                        <option value="Others">Others</option>
                    </select>
                </div>
            </div>
        </div>
        <center>
        <button type="submit" class="btn btn-primary my-5" name="submit">Submit</button>
</center>
    </form>
    <!---->

    <!--View Data-->

    <div class="col-12 webkit-center">
        <?php
        include 'db.php';
        // SQL query to retrieve data from the 'studentsinfo' table
        $sql = "SELECT * FROM studentsinfo";

        // Execute the SQL query and store the result
        $result = $conn->query($sql);

        // Check if there are any results
        if ($result->num_rows > 0) {
            echo "<table class='table'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>City</th>
                    <th>Group ID</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>";

            // Loop through the result set and display data in rows
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['first_name']}</td>
                <td>{$row['last_name']}</td>
                <td>{$row['city']}</td>
                <td>{$row['groupId']}</td>
                <td><a class='btn btn-info' href='updatesingle.php?id=$row[id]'>Update/Delete</a></td>
              </tr>";
            }

            echo "</tbody></table>";
        } else {
            // Display a message if no results are found
            echo "No results";
        }
        // close the connection when done
        $conn->close();
        ?>
    </div>

    <!---->
</div>


<?php


include '../php_tasks/footer.php'; ?>