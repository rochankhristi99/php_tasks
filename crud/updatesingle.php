<?php
$title = "Exercise 7: CRUD APP";
include '../php_tasks/header.php';


include 'db.php';

$a = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM studentsinfo WHERE id= '$a'");
$row = mysqli_fetch_array($result);
?>
<div class="bg_dark  text-center ">
    <h1 class="text-white fw-bolder">EXERCISE 7</h1>
</div>
<div class="body_sec pb-5 justify-content-center row">
    <h5>Update your information below:</h5>

    <form name="form1" method="post" action="">

        <div class="form-group my-5">
            <div class="row">
                <div class="col">
                    <label for="fname">First Name:</label>
                    <input type="text" class="form-control" id="fname" required
                        value="<?php echo $row['first_name']; ?>" name="fname" required>
                </div>
                <div class="col">
                    <label for="lname">Last Name:</label>
                    <input type="text" class="form-control" id="lname" required
                        value="<?php echo $row['last_name']; ?>"" name="lname" required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="city">City:</label>
                    <input type="text" class="form-control" id="city" required
                        value="<?php echo $row['city']; ?>"" name="city" required>
                </div>
                <div class="col">
                    <label for="city">Group:</label>
                    <input type="text" class="form-control" id="groupId" required
                        value="<?php echo $row['groupId']; ?>"" name="groupId" required>
                </div>
                <!-- <div class="col">
                    <label for="groupid">Group:</label>
                    <select class="form-control" id="groupid" name="groupid" required>
                        <?php
                        /* $groups = array("BBCAP19", "BBCAP20", "BBCAP21", "BBCAP22", "Others");
                        foreach ($groups as $group) {
                            $selected = ($row['groupId'] == $group) ? 'selected' : '';
                            echo "<option value='$group' $selected>$group</option>";
                        }*/
                        ?>
                    </select>
                </div> -->
               
            </div>
        </div>
        <br>
        <div class="row">
        <div class="col"><a href="ex7.php"><button type="button" class="btn btn-primary" name="back">Back</button></a></div>
            <div class="col"><button type="submit" class="btn btn-primary" name="submit">Update your
                    Information</button></div>
            <div class="col"><button type="submit" class="btn btn-primary" name="delete">Delete your
                    Information</button></div>

        </div>
    </form>
</div>
<?php
/* 
The isset() function is used to check if a variable is set and not NULL.
 In this case, it's checking if the $_POST['submit'] 
value is set and not NULL. If the form has been submitted, the value of $_POST['submit'] will be set,
and the code inside the if block will be executed. If the form has not been submitted, 
the value of $_POST['submit'] will not be set, and the code inside the if block will not be executed.
*/
if (isset($_POST['submit'])) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city = $_POST['city'];
    $groupId = $_POST['groupId'];
    $query = mysqli_query($conn, "UPDATE studentsinfo set first_name='$fname', last_name='$lname',city='$city',groupId='$groupId' where id='$a'");
    if ($query) {

        echo "<div class='alert alert-success' role='alert'>Your information is updated Successfully.</div>";
    } else {
        echo "Record Not modified";
    }
}

if (isset($_POST['delete'])) {
    $query = mysqli_query($conn, "DELETE FROM studentsinfo where id='$a'");
    if ($query) {
        echo "<div class='alert alert-success' role='alert'>Record Deleted with id: $a <br></div>";
        // if you want to redirect to update page after updating
         header("location: ex7.php");
    } else {
        echo "Record Not Deleted";

    }
}

$conn->close();


include '../php_tasks/footer.php'; ?>