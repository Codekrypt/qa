<?php
$question = htmlspecialchars($_GET["question"]);
$category = htmlspecialchars($_GET["category"]);

if ($question == null or $category == null) { die("Question not found."); }

$con = new mysqli("localhost", "devshubh", "", "qa");
if ($con->connect_error) { die("Could not connect to DB" . mysqli_error()); }

$stm = "SELECT * FROM answers WHERE name='$category' AND qid = '$question'";

$rows = $con->query($stm);
while ($row = $rows->fetch_array()) {
    /* show answers */
}

$rows->free();
$con->close();

?>