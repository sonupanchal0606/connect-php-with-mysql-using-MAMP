<html>
<body>

<?php

$servername = 'localhost';//"127.0.0.1"//
$username = 'root';
$password = 'root';
$dbname = 'bank';

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


$accnum=(int)$_POST['accnum'];
$name=$_POST['name'];
$bname=$_POST['bname'];
$balance=(int)$_POST['balance'];
 

if($_POST['a'] == 'insert')
{
  $sql = "INSERT INTO customer VALUES ($accnum, '$name', '$bname',$balance)";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


}
elseif($_POST['a'] == 'update')
{
  $sql="update customer set  balance =$balance where acno =$accnum";
  if (mysqli_query($conn, $sql)) {
    echo "account $accnum updates  successfully with balance = $";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
elseif($_POST['a'] == 'delete')
{
  $sql= "delete from  customer where acno=$accnum";
  if (mysqli_query($conn, $sql)) {
    echo "account $accnum deleted  successfully ";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
mysqli_close($conn);


/*    if (isset($_POST['i'])) {
       
    }
    elseif (isset($_POST['u'])) {
       
    }
    elseif (isset($_POST['d'])) {
       
    } 
*/
?>

<br>
<br>
<br>
<a href="http://localhost/a.php">go back</a>
</body>
</html>
