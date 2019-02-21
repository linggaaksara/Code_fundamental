<?php
class oop {
    
    function login($con, $table, $username, $password, $redirect) {
        @session_start();
        $sql = "SELECT * FROM $table WHERE username = '$username' and password = '$password'";
        @$query = mysqli_query ($con, $sql);
        if ($query) {
            # code...
        }else{
           
        }
        @$tampil = mysqli_fetch_array ($query);
        @$cek = mysqli_num_rows($query);
        if ($cek > 0) {
            $_SESSION['username'] = $username;
            echo "<script>alert('Login Berhasil');document.location.href='$redirect'</script>";
        } else {
            echo "<script>alert('Login gagal cek username dan password !!');</script>";
        }
         echo "<script>alert('eror');</script>";
    }
}
