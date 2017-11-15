<?php
// require 'dbConnection.php';

// $sql = "SELECT name, hostCompany, eventDescription
//         FROM event";

// $result = $dbc->query($sql);

$arr = array(
    array(
        "Event_Name" => "Furniture Bank of Metro Atlanta",
        "Organization_Name" => "Animal Shelter",
        "Event_description" => "Deliver furniture to needy families"
    ),
);
echo json_encode($arr);

// $arr = array();
// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//         $event = array(
//             "Event_Name" => $row["name"],
//             "Organization_Name" => $row["hostCompany"],
//             "Event_description" => $row["eventDescription"]
//         );
//         array_push($arr, $event);
//     }
// } else {
//     echo "0 results";
// }
// $dbc->close();

//$arr = array(
//    array(
//        "Event_Name" => "Volunteer Opportunity 1",
//        "Organization_Name" => "Animal Shelter",
//        "Event_description" => "Event description"
//
//    ),
//    array(
//        "Event_Name" => "Volunteer Opportunity 2",
//        "Organization_Name" => "Animal Shelter",
//        "Event_description" => "Event description"
//    ),
//    array(
//        "Event_Name" => "Volunteer Opportunity 3",
//        "Organization_Name" => "Animal Shelter",
//        "Event_description" => "Event description"
//    )
//);

//echo json_encode($arr);
?>
