<div class="container p-5">
  <div id="detail" class="card center mx-auto" style="width: 30rem;">
    <div class="card-body">
      <h5 class="card-title">Peserta PPDB <?php echo $detail['tp'] ?></h5>
      <h6 class="card-subtitle mb-2 text-muted"><?php echo $detail['nama_panjang'] ?></h3></h6>
      <table class="table">
        <tr>
          <td>Tahun pelajaran</td>
          <td> : 
            <?php echo $detail['tp'] ?>
          </td>
        </tr>
        <tr>
          <td>Nama panggilan</td>
          <td> : 
            <?php echo $detail['nama_panggilan'] ?>
          </td>
        </tr>
        <tr>
          <td>No Peserta</td>
          <td> : 
            <?php echo $detail['no_peserta'] ?>
          </td>
        </tr>
        <tr>
          <th>
            <form action="" method="post">
              <input style="display: none" name="hadir" value="<?php echo $detail['no_peserta'] ?>">
              <input class="btn btn-success" type="submit">
              
            </form>
          </th>
          <th>
            <a href="" class="fa fa-undo fa-3x text-danger" aria-hidden="true"></a>
          </th>
        </tr>
      </table>
    </div>
  </div>
</div>

