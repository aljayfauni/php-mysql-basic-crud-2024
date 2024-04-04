<?php 
include 'db.php';

$userId = $_GET['id'];

$sql = "select * from contact where id ='$userId'";
$result = $conn->query($sql);


//update
if(isset($_POST['update_btn'])){
    $user_id = $userId;
    $name = $_POST['name'];
    $contact = $_POST['contact'];

    $sql = "update contact set name='$name',contact='$contact' where id ='$user_id'";
    $result = $conn->query($sql);

    header("location:index.php");


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
</head>
<body>
<form action="" method="post">
        <h2>edit Contact</h2>
        <?php
        while($row = $result->fetch_assoc()){
        ?>
        <input type="text" name="name" value="<?php echo $row['name']?>">
        <br><br>
        <input type="text" name="contact" value="<?php echo $row['contact']?>">
        <br><br>
        <input type="submit" value="update" name="update_btn">
        <?php } ?>
    </form>
</body>
</html>