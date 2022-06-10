<?php 
include __DIR__ . "/../database.php";
$selected_genre = $_GET["genre"];
$data_to_encode = $database;
if ($selected_genre !== null && $selected_genre !== "") {
    $data_to_encode = [];
    foreach ($database as $single_data) {
        if ($single_data["genre"] === $selected_genre) {
            $data_to_encode[] = $single_data;
        }
    }
}
$database_json = json_encode($data_to_encode);
header("Content-Type: application/json");
echo $database_json;
?>