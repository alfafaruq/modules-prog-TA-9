<html>
<head>
    <title>Tambah Barang</title>
</head>

<body>
    <a href="admin">Go to Home</a>
    <br/><br/>

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>ID Produk</td>
                <td><input type="text" name="product_id"></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr> 
                <td>Harga</td>
                <td><input type="text" name="price"></td>
            </tr>
            <tr> 
            	<td>Image</td>
                <td><input type="text" name="mobile"></td>
            </tr>
            <tr> 
                <td>Deskripsi</td>
                <td><input type="text" name="price"></td>
            </tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $product_id = $_POST['product_id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $image = $_POST['image'];
        $description = $_POST['description'];

        // include database connection file

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO product(product_id,name,price,image,description) VALUES('$product_id','$name','$price','$image','$description')");

        // Show message when user added
        echo "User added successfully. <a href='admin'>View Users</a>";
    }
    ?>
</body>
</html>