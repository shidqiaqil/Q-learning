<?php 
    if(isset($_POST['kirimselect'])){
        komenSelect();
    }else if(isset($_POST['kirimoperator'])){
        komenOperator();
    }else if(isset($_POST['kirimfungsi'])){
        komenFungsi();
    }else if(isset($_POST['kirimkondisional'])){
        komenKondisional();
    }else if(isset($_POST['kirimorderby'])){
        komenOrderBy();
    }else if(isset($_POST['kirimcross'])){
        komenCrossJoin();
    }else if(isset($_POST['kirimnatural'])){
        komenNaturalJoin();
    }else if(isset($_POST['kiriminner'])){
        komenInnerJoin();
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

    function komenKondisional(){
        include 'koneksi.php';
        $nama = getFieldNama();
        $komen = getFieldKomen();
        if(!empty($nama)&&!empty($komen)){
            $sql = "INSERT INTO komentar (idmateri,nama,komen) VALUES (4,'".$nama."','".$komen."')";
            $sql1 = mysqli_query($conn,$sql);
            if($sql1){
                echo "<script type='text/javascript'>";
                echo "alert('Pesan Terkirim');";
                echo "document.location = 'materi-kondisional.php'";
                echo "</script>";
            }
        }
    }

    function komenOrderBy(){
        include 'koneksi.php';
        $nama = getFieldNama();
        $komen = getFieldKomen();
        if(!empty($nama)&&!empty($komen)){
            $sql = "INSERT INTO komentar (idmateri,nama,komen) VALUES (5,'".$nama."','".$komen."')";
            $sql1 = mysqli_query($conn,$sql);
            if($sql1){
                echo "<script type='text/javascript'>";
                echo "alert('Pesan Terkirim');";
                echo "document.location = 'materi-orderby.php'";
                echo "</script>";
            }
        }
    }

    function komenCrossJoin(){
        include 'koneksi.php';
        $nama = getFieldNama();
        $komen = getFieldKomen();
        if(!empty($nama)&&!empty($komen)){
            $sql = "INSERT INTO komentar (idmateri,nama,komen) VALUES (6,'".$nama."','".$komen."')";
            $sql1 = mysqli_query($conn,$sql);
            if($sql1){
                echo "<script type='text/javascript'>";
                echo "alert('Pesan Terkirim');";
                echo "document.location = 'materi-crossjoin.php'";
                echo "</script>";
            }
        }
    }

    function komenNaturalJoin(){
        include 'koneksi.php';
        $nama = getFieldNama();
        $komen = getFieldKomen();
        if(!empty($nama)&&!empty($komen)){
            $sql = "INSERT INTO komentar (idmateri,nama,komen) VALUES (7,'".$nama."','".$komen."')";
            $sql1 = mysqli_query($conn,$sql);
            if($sql1){
                echo "<script type='text/javascript'>";
                echo "alert('Pesan Terkirim');";
                echo "document.location = 'materi-naturaljoin.php'";
                echo "</script>";
            }
        }
    }

    function komenInnerJoin(){
        include 'koneksi.php';
        $nama = getFieldNama();
        $komen = getFieldKomen();
        if(!empty($nama)&&!empty($komen)){
            $sql = "INSERT INTO komentar (idmateri,nama,komen) VALUES (8,'".$nama."','".$komen."')";
            $sql1 = mysqli_query($conn,$sql);
            if($sql1){
                echo "<script type='text/javascript'>";
                echo "alert('Pesan Terkirim');";
                echo "document.location = 'materi-innerjoin.php'";
                echo "</script>";
            }
        }
    }
?>