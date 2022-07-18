<?php
class db
{
    
    function opencon(){
    $dbHostname="localhost";
    $dbUsername="root";
    $dbPass="";
    $dbName="labtask";

$conn=new mysqli($dbHostname, $dbUsername, $dbPass, $dbName);
if($conn->connect_error)
{
    echo "Connection Error".$conn->connect_error;
}
return $conn;
    }
//query function
    function InsertData($fname, $lname, $age, $designation, $planguage, $email, $password, $picture, $tablename, $conn){
    $sqlstr="INSERT INTO $tablename(fname, lname, age, designation, planguage, email, password, picture) values ('$fname', '$lname', $age, '$designation', '$planguage', '$email', '$password', '$picture')";

if($conn->query($sqlstr)==TRUE)
{
    echo "DSuccessfully Data Inserted";
}
else{
    echo "Error".$conn->err;
}
}
function showUser($tablename, $conn){
    $sqlstr="SELECT * FROM $tablename";
    return $conn->query($sqlstr);
}
//close function
function closecon($conn){
    $conn->close();
}

}
?>