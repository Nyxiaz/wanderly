<?php

include "../php/db.php";

$source = $_POST['source'];
$destination = $_POST['destination'];
$type = $_POST['type'];

$sql = "SELECT * FROM transport 
WHERE source='$source' 
AND destination='$destination' 
AND type='$type'";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){

while($row = mysqli_fetch_assoc($result)){

echo "<div style='border:1px solid #ccc;padding:10px;margin:10px;'>";

echo "<h3>".$row['type']."</h3>";
echo "<p>".$row['source']." → ".$row['destination']."</p>";
echo "<p>Price: ₹".$row['price']."</p>";
echo "<p>Duration: ".$row['duration']."</p>";
echo "<p>Departure: ".$row['departure_time']."</p>";

echo "<button>Book</button>";

echo "</div>";

}

}else{

echo "No routes found";

}

?>