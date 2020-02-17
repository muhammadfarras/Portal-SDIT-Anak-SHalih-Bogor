
  <div class="detail">
      <table>
      <?php
        
        
        while ($result = mysqli_fetch_assoc ($data)){
          $hasil = getSiswaByNIs ($result['nis']);
          $siswa = mysqli_fetch_assoc ($hasil);
            echo '
            
            <div class="dropright ml-3 mt-3 mb-3">
              <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                '.$siswa['nama_siswa'].'
              </a>
            
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="../view/?data='.$result['nis'].'">Lihat</a>
                <a class="dropdown-item" href="../update/?data='.$result['nis'].'">Tambah Catatan Kesehatan</a>
                <a class="dropdown-item" href="../update-bbtb/?data='.$result['nis'].'">Update Berat dan Tinggi Badan</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../edit/?data='.$result['nis'].'">Edit Delete Rekam</a>
              </div>
            </div>';
        }
        
      ?>
      </table>
  </div>

