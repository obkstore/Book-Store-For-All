<?php

$servername = "localhost";
$user = "root";
$password = "";
$dbname = "books";
$conn1 = new PDO("mysql:host=$servername;dbname=$dbname",$user,$password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"));
$conn1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conn1->exec("SET CHARACTER SET UTF8");

$conn = mysqli_connect("localhost","root","","books");
$id='';
$name='';
$auther='';
$price='';
$description='';
$image='';
$update = false;
if(isset($_GET['delete']))
{
    $id = $_GET['delete'];
    $stm = "DELETE FROM book WHERE id=$id";
    mysqli_query($conn,$stm)or die($mysqli->error());
}

if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $auther=$_POST['auther'];
    $price=$_POST['price'];
    $description=$_POST['description'];
    $image=$_POST['image'];
    $stm = "UPDATE book SET name='$name',auther='$auther',price=$price,description='$description',image='$image' WHERE id=$id";
    mysqli_query($conn,$stm)or die($mysqli->error());
}


if(isset($_GET['edit']))
{
    $id = $_GET['edit'];
    $update = true;
    $stm = "SELECT * FROM book WHERE id=$id";
    $result =  mysqli_query($conn, $stm) or die($mysqli->error());
    if(mysqli_num_rows($result) == 1)
    {
        $row = $result->fetch_array();
        $id = $row['id'];
        $name = $row['name'];
        $auther = $row['auther'];
        $price = $row['price'];
        $description = $row['description'];
        $image = $row['image'];
    }
}

// ...

$sql = "SELECT * FROM book ";
$data = mysqli_query($conn, $sql);
if(!$data)
{
    die('');
}
else
{
    ?>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Auther</th>
            <th>Price</th>
            <th>Description</th>
            <th>Image</th>
        </tr>
    <?php
    while($category = mysqli_fetch_array($data))
    {
        ?>
        <tr>
            <td><?php echo $category['name']; ?></td>
            <td><?php echo $category['auther'];?></td>
            <td><?php echo $category['price'];?></td>
            <td><?php echo $category['description'];?></td>
            <td><img src="<?php echo $category['image'];?>" width="100px" height="100px"></td>
            <td>
                <a href="manager.php?edit=<?php echo $category['id']; ?>">Edit</a>
                <a href="manager.php?delete=<?php echo $category['id']; ?>">Delete</a>
            </td>
        </tr>
        <?php
    }
    ?>
    </table>
    <form action="manager.php" method="POST">
        Name:<input type="text" name="name" id="name" value="<?php echo $name; ?>"/><br><br>
        Auther:<input type="text" name="auther" id="auther" value="<?php echo $auther; ?>"/><br><br>
        Price:<input type="text" name="price" id="price" value="<?php echo $price; ?>"/><br><br>
        Description:<input type="text" name="description" id="description" value="<?php echo $description; ?>"/><br><br>
        Image:<input type="text" name="image" id="image" value="<?php echo $image; ?>"/><br><br>
        <input type="hidden" name="id" id="id" value="<?php echo $id; ?>"/><br><br>
        <?php
        if($update == true):
        ?>
        <input type="submit" name="update" value="update" />
        <?php else: ?>
        <input type="submit" name="submit" value="Add" />
        <?php endif; ?>
    </form>
    <?php
}
$conn->close();
    ?>