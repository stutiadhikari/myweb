<?php
if(isset($_POST["upload"])) {
    $note_title = $_POST["note_title"];
    $note_file_name = $_FILES["note_file"]["name"];
    $note_file_tmp = $_FILES["note_file"]["tmp_name"];
    $note_file_destination = "uploads/" . $note_file_name; // Change the directory as per your setup

    move_uploaded_file($note_file_tmp, $note_file_destination);

    // Save the note information to the database if needed

    echo "Note uploaded successfully!";
}
?>
