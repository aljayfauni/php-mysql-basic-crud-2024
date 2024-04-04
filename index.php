<?php 
include 'db.php';

if(isset($_POST['register'])){

    $name= $_POST['name'];
    $contact =$_POST['contact'];
    if(!empty($name && $contact)){

 
        $sql= "Insert into contact(name,contact) values ('$name','$contact')";
        $query = $conn->query($sql);
        if($query){
            echo "<script>alert('inserted!');</script>";
        }
        else{
            echo "<script>alert('failed to insert!');</script>";
        }
    }
    else{
        echo "<script>alert('please fillup the fields!!');</script>";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php crud</title>
</head>
<body>
    <form action="" method="post">
        <h2>Add Contact</h2>
        <input type="text" name="name" placeholder="name">
        <br><br>
        <input type="text" name="contact" placeholder="contact">
        <br><br>
        <input type="submit" value="submit" name="register">
    </form>
    <br><br>
    <table>
        <tr>
            <th>
                ID
            </th>
            <th>
                Name
            </th>
            <th>
                Contact No
            </th>
            <th>
                action
            </th>
            
</tr>
        <tbody>
            <?php
                $get_contacts = "Select * from contact";
                $result = $conn->query($get_contacts);
                while($row = $result->fetch_assoc()) {
                
            ?>
            <tr>
                <td>
                    <?php echo $row['id'];?>
                </td>
                <td>
                    <?php echo $row['name'];?>
                </td>
                <td>
                    <?php echo $row['contact'];?>
                </td>

                <td>
                    <a href="edit.php?id=<?php echo $row['id']?>">edit</a>
                    <a href="delete.php?id=<?php echo $row['id']?>">delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>

    </table>
</body>
</html>