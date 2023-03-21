<?php

// Connect to database
$con = mysqli_connect("localhost", "root", "", "enquiryproj");

// mysqli_connect("servername","username","password","database_name")

// Get all the categories from category table
$sql = "SELECT * FROM `tbl_service`";
$all_categories = mysqli_query($con, $sql);

// The following code checks if the submit button is clicked
// and inserts the data in the database accordingly
if (isset($_POST['submit'])) {
    // Store the Product name in a "name" variable
    $name = mysqli_real_escape_string($con, $_POST['service_type_name']);

    // Store the Category ID in a "id" variable
    $id = mysqli_real_escape_string($con, $_POST['service_status']);

    // Creating an insert query using SQL syntax and
    // storing it in a variable.
    $sql_insert =
        "INSERT INTO `product`(`service_type_name`, `service_status`)
            VALUES ('$name','$id')";

    // The following code attempts to execute the SQL query
    // if the query executes with no errors
    // a javascript alert message is displayed
    // which says the data is inserted successfully
    if (mysqli_query($con, $sql_insert)) {
        echo '<script>alert("Product added successfully")</script>';
    }
}
?>





    <label>Select a Category</label>
    <select name="Category">
        <?php
        // use a while loop to fetch data
        // from the $all_categories variable
        // and individually display as an option
        while ($category = mysqli_fetch_array(
            $all_categories,
            MYSQLI_ASSOC
        )) :;
        ?>
            <option value="<?php echo $category["service_type_name"];
                            // The value we usually set is the primary key
                            ?>">
                <?php echo $category["service_type_name"];
                // To show the category name to the user
                ?>
            </option>
        <?php
        endwhile;
        // While loop must be terminated
        ?>
    </select>
    <br>

<br>
