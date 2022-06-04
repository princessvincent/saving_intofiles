<?php
// print_r($_POST)
$name = $_POST["name"];
$email = $_POST["email"];
$date = $_POST["date"];
$gender = $_POST["gender"];
$country = $_POST["country"];

print_r( "Name: " . $name . "<br>");
print_r( "Email: " . $email . "<br>");
print_r( "Date of Birth: " . $date . "<br>");
print_r( "gender: " . $gender . "<br>");
print_r( "Country: " . $country . "<br>");
?>

<?php
$data= $name . ',' . $email . ',' . $date . ',' . $gender . ',' . $country;
$file_name = "userdata.csv";
$handle = fopen($file_name, 'a' );
fwrite($handle, $data . "\n");


?>