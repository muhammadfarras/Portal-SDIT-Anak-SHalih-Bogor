<div class="container mt-5 mb-5">
    <div class="media">
      <div class="media-body">
        <h5 class="mt-0"><?php echo $data['nama_siswa']?></h5>
        <p>adalah siswa <?php ?> dengan nomor induk siswa <?php echo $data['nis'] ?>, kelas <?php echo $kelas['tingkat']."".$kelas['kelas']?>.</p>
        
        <div class="container">
            <div class="row">
              <div class="col">
                <a class="btn btn-success btn-lg btn-block" href="input/?nis=<?php echo $data['nis']; ?>">Karakteristik Perkembangan</a>
              </div>
              <div class="col">
                <a class="btn btn-success btn-lg btn-block" href="input/?nis=<?php echo $data['nis']; ?>">Kognitif</a>
              </div>
              <div class="col">
                <a class="btn btn-success btn-lg btn-block" href="input/?nis=<?php echo $data['nis']; ?>">Kognitif</a>
              </div>
            </div>
            
            <div class="row mt-3">
              <div class="col">
                <a class="btn btn-success btn-lg btn-block" href="input-1/?nis=<?php echo $data['nis']; ?>">Sosial</a>
              </div>
              <div class="col">
                <a class="btn btn-success btn-lg btn-block" href="input/?nis=<?php echo $data['nis']; ?>">Kognitif</a>
              </div>
              <div class="col">
                <a class="btn btn-success btn-lg btn-block" href="input/?nis=<?php echo $data['nis']; ?>">Kognitif</a>
              </div>
            </div>
          </div>
            
            
            
        
      </div>
    </div>
</div>
