<?php
include 'connection.php';

$id=$_POST['id'];
$sql = mysqli_query($con, "SELECT * FROM `add_rental_vehicles` where type_of_vehicle ='car'");
$list= array();

if ($sql->num_rows>0){
    while ($row = mysqli_fetch_assoc($sql)){
        $myarray['message'] = 'viewed';
        $myarray['rental_id'] =$row['rental_id'];
        $myarray['price'] =$row['price'];
        $myarray['name'] =$row['name'];
        $myarray['type_of_vehicle'] =$row['type_of_vehicle'];
        $myarray['type_of_gear'] =$row['type_of_gear'];
        $myarray['color_of_vehicle'] =$row['color_of_vehicle'];
        $myarray['seats_of_vehicle'] =$row['seats_of_vehicle'];
        $myarray['fuel_of_vehicle'] =$row['fuel_of_vehicle'];
        $myarray['location'] =$row['location'];
        $myarray['RC'] =$row['RC'];
        $myarray['insurance'] =$row['insurance'];
        $myarray['driving_licence'] =$row['driving_licence'];
        $myarray['upload_photo'] =$row['upload_photo'];


        array_push($list,$myarray);
    }
}
else{
    $myarray['message']= 'failed';
    array_push($list,$myarray);
}
echo json_encode($list);
?>