<?php 
    if(isset($_POST['kirimselect'])){
        komenSelect();
    }else if(isset($_POST['kirimoperator'])){
        komenOperator();
    }else if(isset($_POST['kirimfungsi'])){
        komenFungsi();
    }



    function getFieldNama(){
        return $_POST['nama'];
    }

    function getFieldKomen(){
        return $_POST['komen'];
    }

    function komenSelect(){
        include 'koneksi.php';
        $nama = getFieldNama();
        $komen = getFieldKomen();
        if(!empty($nama)&&!empty($komen)){
            $sql = "INSERT INTO komentar (idmateri,nama,komen) VALUES (1,'".$nama."','".$komen."')";
            $sql1 = mysqli_query($conn,$sql);
            if($sql1){
                echo "<script type='text/javascript'>";
                echo "alert('Pesan Terkirim');";
                echo "document.location = 'mater-query-dasar.php'";
                echo "</script>";
            }
        }
    }

    function komenOperator(){
        include 'koneksi.php';
        $nama = getFieldNama();
        $komen = getFieldKomen();
        if(!empty($nama)&&!empty($komen)){
            $sql = "INSERT INTO komentar (idmateri,nama,komen) VALUES (2,'".$nama."','".$komen."')";
            $sql1 = mysqli_query($conn,$sql);
            if($sql1){
                echo "<script type='text/javascript'>";
                echo "alert('Pesan Terkirim');";
                echo "document.location = 'materi-operator.php'";
                echo "</script>";
            }
        }
    }

    function komenFungsi(){
        include 'koneksi.php';
        $nama = getFieldNama();
        $komen = getFieldKomen();
        if(!empty($nama)&&!empty($komen)){
            $sql = "INSERT INTO komentar (idmateri,nama,komen) VALUES (3,'".$nama."','".$komen."')";
            $sql1 = mysqli_query($conn,$sql);
            if($sql1){
                echo "<script type='text/javascript'>";
                echo "alert('Pesan Terkirim');";
                echo "document.location = 'materi-fungsi.php'";
                echo "</script>";
            }
        }
    }
?>