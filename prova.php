<?php
$link = mysqli_connect("localhost", "steplab", "78f25d78", "meteo");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}


/* Select queries return a resultset */
if ($result = $link->query("SELECT * FROM temperatura LIMIT 10")) {
    printf("Select returned %d rows.\n", $result->num_rows);

    /* free result set */
    
}

/*while($row = $result->fetch_array(MYSQLI_ASSOC)){
    print_r($row);
}*/
while($row = $result->fetch_array(MYSQLI_ASSOC)){
echo "temp: ".$row['temperatura'].'<br>';

}
echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;
$result->close();
mysqli_close($link);
?>
