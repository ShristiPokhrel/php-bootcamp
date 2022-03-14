<html>

<head>
    <title>create student</title>
</head>

<body>

    <?php include('../config.php');


    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $address = $_POST['address'];
        $district = $_POST['district'];
        $file_name = $_FILES['image']['name'];
        $file_tmp = $_FILES['image']['tmp_name'];

        move_uploaded_file($file_tmp, "images/" . $file_name);

        if (empty($name) || empty($address)) {
            echo "Name/address empty";
            exit;
        } else {
            $query = "INSERT INTO student SET name = '$name', address = '$address', district = '$district', image = '$file_name'";
            $result = mysqli_query($conn, $query);
            if ($result) {
                echo "Inserted";
                header("location:list.php");
            } else {
                echo "not inserted";
            }
        }
    }
    ?>

    <div class="form-group">
        <form action="#" method="POST" enctype="multipart/form-data">
            Name: <input type="text" name="name"><br><br>
            Address: <input type="text" name="address"><br><br>
            <select name="district" id="">
                <option value="kathmandu">Kathmandu</option>
                <option value="lalitpur">Lalitpur</option>
                <option value="Bhaktapur">Bhaktapur</option>
            </select><br> <br>
            <input type="file" name="image" id=""><br><br>
            <input type="submit" value="submit" name="submit"></input><br><br>

        </form>
    </div>
</body>

</html>