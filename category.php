<?php
/* echo "You selected the " . htmlspecialchars($_GET["category"]) . " category!"; */
$category = htmlspecialchars($_GET["category"]);

if ($category == null) { die("Category does not exist!"); }

$con = new mysqli("localhost", "devshubh", "", "qa");
if ($con->connect_error) { die("Could not connect to DB: " . mysqli_error()); }

$stm = "SELECT qtext, qdescription WHERE category_name = " . $category;

while ($row) # -- FIXME
?>
