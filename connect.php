<?php
    $con = mysqli_connect("localhost", "root", "", "praktikum_11");

    function query($query) {
        global $con;
        $data = mysqli_query($con, $query);
        $_karyawan = [];
        while ($karyawan = mysqli_fetch_assoc($data)) {
            $_karyawan[] = $karyawan;
        }
        return $_karyawan;
    }

    function add($data) {
        global $con;

        $name = $data['name'];
        $email = $data['email'];
        $address = $data['address'];
        $gender = $data['gender'];
        $position = $data['position'];
        $status = $data['status'];

        $query = "INSERT INTO karyawan VALUES('', '$name', '$email', '$address', '$gender', '$position', '$status')";

        mysqli_query($con, $query);
        return mysqli_affected_rows($con);
    }

    function delete($id) {
        global $con;

        mysqli_query($con, "DELETE FROM karyawan WHERE id = $id");
        return mysqli_affected_rows($con);
    }
?>