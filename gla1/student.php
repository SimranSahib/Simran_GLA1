//GLA - 1  Simranjit Singh


<?php
include 'connection.php';
//declaring the update function to update the rows
function update_student($id) {
    global $conn;
    $sql = "UPDATE students SET student_name='Mark', student_age='30',student_number='23422' WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        echo " || Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}

//declaring the delete function to delete the rows

function delete_student() {
    global $conn;
    $sql = "DELETE FROM students WHERE id='59'";

    if (mysqli_query($conn, $sql)) {
     echo " || Record deleted successfully ";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}


update_student(21);
delete_student();
mysqli_close($conn);
?>
