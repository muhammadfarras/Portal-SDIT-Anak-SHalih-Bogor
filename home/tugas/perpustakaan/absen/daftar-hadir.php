<?php
require ("../../../../advance.php");
$mysqli = new mysqli ($host,$username,"$pass");
$mysqli->select_db ($dbname);

$query = "SELECT * FROM perpus_absen WHERE waktu = CURDATE() ORDER BY jam ASC";
$result = $mysqli->query ($query);
//if ($mysqli->affected_rows >0 ){
    while ($data = $result->fetch_assoc()){
        $siswa = new baseSiswa ($data['nis']);
        
        echo '
        <div class="media">
            <div class="media-body">
              <h5 class="mt-0">'.$siswa->getNama().'</h5>
              <p>Waktu absensi perpus : '.$data['jam'].'</p>
              <hr>
            </div>
          </div>
        ';
        
        
    }
//}

?>