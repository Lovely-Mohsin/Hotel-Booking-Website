
<?php
$cn = mysqli_connect("localhost" , "root" , "" , "hotel-booking-system") or die ("Connection Failed");

// function to filter the data
function filteration($data){

    foreach($data as $key => $value){
        $data[$key] = trim($value);
        $data[$key] = stripcslashes($value);
        $data[$key] = htmlentities($value);
        $data[$key] = strip_tags($value);
    }
    return $data;
}

?>