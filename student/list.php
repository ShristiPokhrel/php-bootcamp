<?php include('../config.php');

?>

<table border="1" cellpadding="5px" cellspacing="0">
    <thead>
        <tr>
            <th>id</th>
            <th>Nmae</th>
            <td>Address</th>
            <th>District</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $selectquery = "select * from student";
            $result = mysqli_query($conn, $selectquery);
            if(mysqli_num_rows($result)){
                while($row= mysqli_fetch_assoc($result)){
        ?>
    <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['district']; ?></td>
            <td><img src="images/<?php echo $row['image']; ?>" alt="" width="50px" height="50px"></td>
            <td><button type="submit"><a href="edit.php? id=<?php echo $row['id'];?>">Edit</a></button> <button type="submit"><a href="delete.php? id=<?php echo $row['id'];?>" onclick="return confirm('Are you sure?')";> Delete </a> </button></td>
            
        </tr>
            <?php   
    }
}
?>

    </tbody> 
</table>