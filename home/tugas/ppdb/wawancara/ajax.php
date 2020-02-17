<?php
    require ("../../../../advance.php");
    if (!empty ($_GET['current-interview'])){
        $nopeserta = $_GET['no-peserta'];
        $time = time();
        $query = "UPDATE ppdb_peserta SET online_time = '$time' WHERE no_peserta = '$nopeserta'";
        $mysqli = mysqli_query ($connect,$query);

        echo mysqli_affected_rows ($connect);
        echo mysqli_error ($connect);

    }

?>