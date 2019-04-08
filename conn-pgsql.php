<h1>Hello Etaki</h1>
<h4>Attempting Postgresql connection from php...</h4>
<?php
$dbhost = 'db';
$dbname = 'etaki3d';
$username = 'techlab';
$password = 'Tech2019';
$conn = pg_connect ("host=$dbhost dbname=$dbname user=$username password=$password");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected to Postgresql successfully!";
?>
