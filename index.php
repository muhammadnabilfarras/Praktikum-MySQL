<?php
    require 'connect.php';

    
        if( isset($_POST["submit"])){
            if(add($_POST) > 0) {
                echo "
                    <script>
                        document.location.href = 'index.php';
                    </script>
                ";
            } else {
                echo "
                    <script>
                        document.location.href = 'index.php';
                    </script>
                ";
            }
        }
    
?>

<?php
    $result = query("SELECT * FROM karyawan");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tambah data</title>
</head>
<body>
    <h1>Pendaftaran</h1>

    <form action="" method="POST">
        <label for="name">Nama</label>
        <br>
        <input type="text" name="name" id="name">
        <br>
        <br>
        <label for="email">Email</label>
        <br>
        <input type="text" name="email" id="email">
        <br>
        <br>
        <label for="address">Address</label>
        <br>
        <input type="text" name="address" id="address">
        <br>
        <br>
        <label for="gender">Gender</label>
        <br>
        <select name="gender" id="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
        <br>
        <br>
        <label for="position">Position</label>
        <br>
        <input type="text" name="position" id="position">
        <br>
        <br>
        <label for="status">Status</label>
        <br>
        <select name="status" id="status">
            <option value="fulltime">Full Time</option>
            <option value="parttime">Part Time</option>
        </select>
        <br>
        <br>
        <button type="submit" name="submit" class="submit">Submit</button>
    </form>
    <hr>
    <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <td>Nomor</td>
            <td>Nama</td>
            <td>Email</td>
            <td>Address</td>
            <td>Gender</td>
            <td>Position</td>
            <td>Status</td>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($result as $row) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $row["name"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["address"]; ?></td>
            <td><?= $row["gender"]; ?></td>
            <td><?= $row["position"]; ?></td>
            <td><?= $row["status"]; ?></td>
            <td>
                <a href="delete.php?id=<?= $row["id"]; ?>"" class="button">Hapus</a>
            </td>
            <?php $i++; ?>
        </tr>
        <?php endforeach; ?>
</body>
</html>