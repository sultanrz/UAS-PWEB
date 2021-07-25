<?php

$conn = mysqli_connect("localhost","root","","uaspweb");

if(isset($_POST['addbaru'])){
    $nim = $_POST['nim'];
    $namaanggota = $_POST['namaanggota'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    
    $addtotable = mysqli_query($conn,"insert into masuk (nim, namaanggota, alamat, email) values('$nim','$namaanggota','$alamat', '$email')");
    if($addtotable){
        header('location:input.php');
    }else{
        echo 'Gagal';
        header('location:input.php');
    }
}

?>