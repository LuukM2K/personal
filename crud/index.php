<!DOCTYPE html>
<html>
<head>
    <link href="crud.css" rel="stylesheet">
    <title>CRUD: CReate, Update, Delete PHP MySQL</title>
</head>
<body>
<div class="main">
<form method="post" action="server.php">
    <div class="input-group">
        <label>Name</label>
        <input type="text" name="name" value="">
    </div>
    <div class="input-group">
        <label>Address</label>
        <input type="text" name="address" value="">
    </div>
    <div class="input-group">
        <button class="btn" type="submit" name="save">Save</button>
    </div>
</form>
</div>
</body>
</html><?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "k3";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "Registration date: " . $row["reg_date"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
