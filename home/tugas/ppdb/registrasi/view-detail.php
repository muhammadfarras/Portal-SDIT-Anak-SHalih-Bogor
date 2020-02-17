<div class="detail" id="detail">
  <h3><?php echo $detail['nama_panjang'] ?></h3>
  <table>
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
    <tr><th colspan=2 class="collspan">Harap click daftar hadir berikut utuk absen peserta</th></tr>
    <tr>
      <th colspan=2 class="collspan">
        <form action="" method="post">
          <input style="display: none" name="hadir" value="<?php echo $detail['no_peserta'] ?>">
          <input type="submit">
        </form>
        
      </th>
    </tr>
  </table>
</div>