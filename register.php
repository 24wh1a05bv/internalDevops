 sudo apt install mysql-server -y
aaibaba@LAPTOP-PS8V07EO:/mnt/c/Users/aaibaba$ sudo apt update
sudo apt install php php-mysql -y
php -S localhost:8000
<?php 
$conn = mysqli_connect("localhost","root","1234","eventdb"); 
$name = $_POST['name']; 
$email = $_POST['email']; 
$event = $_POST['event']; 
$sql = "INSERT INTO registration(name,email,event) 
VALUES('$name','$email','$event')"; 
if(mysqli_query($conn,$sql)) 
    echo "Registration Successful"; 
else 
    echo "Registration Failed"; 
?>
