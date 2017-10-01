<?php
require 'dbConnection.php';


$interest1 = $_POST["interest1"];
$interest2 = $_POST["interest2"];
$interest3 = $_POST["interest3"];
$interest4 = $_POST["interest4"];
$interest5 = $_POST["interest5"];
$interest6 = $_POST["interest6"];
$accountType = $_POST["accountType"];

//    $phonenumber= $_POST["phonenumber"];
//    $city= $_POST["city"];
//    $state= $_POST["state"];
//    $accounttype= $_POST["accounttype"];

//check if user exists//
$stmt = $dbc->prepare('SELECT * FROM accounts WHERE username = ?');
//s means string
$stmt->bind_param('s', $username);
//$query = "(SELECT * FROM accounts WHERE username= $username)";
$stmt->execute();
$response = $stmt->get_result();

//check length of response to see if there's a match
if ($response->num_rows == 0) {
    //Hash the password
    $hashed_pass = password_hash($password, PASSWORD_DEFAULT);

    $user_created = true;

    //Insert into into database
    $stmt = $dbc -> prepare('INSERT INTO accounts(username, password, email, accountType) VALUES(?,?,?,?)');
    $stmt->bind_param('ssss', $username, $hashed_pass, $email, $accountType);

    if (!$stmt->execute()) {
        $user_created = false;
    }

    $stmt = $dbc -> prepare('INSERT INTO users(username, firstName, lastName, points) VALUES(?,?,?,1)');
    $stmt->bind_param('sss', $username, $firstname, $lastname);

    if (!$stmt->execute()) {
        $user_created = false;
    }

    if ($user_created) {
        echo "Account created successfully!";
    } else {
        echo "An error occurred during account creation. If this issue persists, please contact the administrator.";
    }

} else {
    echo "User already exists!";
}

//Close prepared statement and result set
$stmt -> close();
$response -> close();

//Close connection
$dbc -> close();

?> 