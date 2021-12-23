<div class="time" id="time">

</div>
<div class="time-show" id="time-show">

</div>


<div class="detail table-responsive">
  <?php
    if ($hasil_kekayaan['result'] == "yes"){
      
  ?>
  <h3>Data Pribadi</h3>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Keterangan</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>Kepemilikan Rumah</th>
      <td><?php echo $hasil_kekayaan["ayah"]["kepemilikan_rumah"];?></td>
    </tr>
    <tr>
      <th>Gadget</th>
      <td><?php echo $hasil_kekayaan["ayah"]["gadget"];?></td>
    </tr>
    <tr>
      <th>Instansi Ayah</th>
      <td><?php echo $hasil_kekayaan["ayah"]["instansi_ayah"];?></td>
    </tr>
    <tr>
      <th>Pekerjaan Ayah</th>
      <td><?php echo $hasil_kekayaan["ayah"]["pekerjaan_ayah"];?></td>
    </tr>
    <tr>
      <th>Penghasilan Ayah</th>
      <td><?php echo $hasil_kekayaan["ayah"]["penghasilan_ayah"];?></td>
    </tr>
    
    <?php
//    Jika perkejaan ibu bukan ibu rumah tangga
      if ($hasil_kekayaan["ibu"]["pekerjaan_ibu"] != "Ibu rumah tangga"){
        
    
    ?>
      <tr>
       <th>Instansi Ibu</th>
       <td><?php echo $hasil_kekayaan["ibu"]["instansi_ibu"];?></td>
      </tr>
      <tr>
       <th>Pekerjaan Ibu</th>
       <td><?php echo $hasil_kekayaan["ibu"]["pekerjaan_ibu"];?></td>
      </tr>
      <tr>
       <th>Penghasilan Ibu</th>
       <td><?php echo $hasil_kekayaan["ibu"]["penghasilan_ibu"];?></td>
      </tr>
    
    <?php
      }
      else {
        
    ?>
      <tr>
       <th>Pekerjaan Ibu</th>
       <td><?php echo $hasil_kekayaan["ibu"]["pekerjaan_ibu"];?></td>
      </tr>
    
    <?php
    
      }
    ?>
  </tbody>
  
  <?php
    }
    else {
      echo "<h3>Informasi siswa tidak tersedia</h3>";
    }
  ?>
</table>
</div>
<div class="detail" id="detail">
  <h3><?php echo $detail['nama_panjang'] ?></h3>
  <form action="" method="post">
    <table>
      <tr>
        <td rowspan=4 class="partanyaan">
          Apa alasan utama ingin menyekolahkan anak bapak/ibu ke SDIT Anak Sahlih ?
        </td>
        </td>
        <td rowspan=4><textarea name="text-satu"></textarea>
        </td>
      </tr>
      <tr>
        <td>
          <label>
            <input type="radio" name="satu" value=3 required>
            <br>
            Memiliki aqidah yang benar, amal yang shalih, akhlak mulia
            cinta Allah dan Rasulnya, akal cerdas, dan fisik sehat & kuat
          </label>
      </tr>
      <tr>
        <td>
          <label>
            <input type="radio" name="satu" value=2>
            <br>
            Menjelaskan secara umum, tanpa penjelasan yang detail
          </label>
        </td>
      </tr>
      <tr>
        <td>
          <label>
            <input type="radio" name="satu" value=1>
            <br>
            Jawaban yang tidak berhubungan dengan item yang tertera di nilai baik.
            Misalkan: jarak yang dekat, gedung yang bagus, atau agar pintar tapi tidak
            memperhatikan bagaimana aqidah & akhlak dsb
          </label>
        </td>
      </tr>
      <tr><td colspan=3><hr></td></tr>



      <tr>
        <td rowspan=4 class="partanyaan">
          Apa yang ibu/bapak ketahui tentang SDIT Anak Shalih ?
        </td>
        <td rowspan=4><textarea name="text-dua"></textarea>
      </tr>
      <tr>
        <td>
          <label>
            <input type="radio" name="dua" value=3 required>
            <br>
            Mampu menjelaskan secara detail tentang SDIT Anak Shalih. Bahkan sudah melakukan survei
            langsung atau bertanya pada orang yang pernah menyekolahkan di SDIT Anak Shalih.
          </label>
        </td>

        </td>
      </tr>
      <tr>
        <td>
          <label>
            <input type="radio" name="dua" value=2>
            <br>
            Mampu memberikan jawaban secara umum tentang SDIT Anak Shalih
          </label>
        </td>
      </tr>
      <tr>
        <td>
          <label>
            <input type="radio" name="dua" value=1>
            <br>
            Hanya sedikit mengetahui dan justru mengajukan
            pertanyaan tentang SDIT Anak Shalih.
          </label>
        </td>
      </tr>
      <tr><td colspan=3><hr></td></tr>

      <!-- Pertanyaan tiga -->
      <tr>
        <td rowspan=4 class="partanyaan">
          Bapak/ibu pernah dengar tentang manhaj salaf, apa yang anda pahami
          (jika ya tanyakan, jika tidak jelaskan dengan singkat).
          kami mendidik menggunakan metode ini, apakah bapak/ibu bersedia mempelajari manhaj salaf.*
          Apakah bapak/ibu bersedia anaknya didik dengan metode tersebut ?

        </td>
        <td rowspan=4><textarea name="text-tiga"></textarea>
      </tr>
      <tr>
        <td>
          <label>
            <input type="radio" name="tiga" value=3 required>
            <br>
            Mampu menjelaskan tentang manhaj salaf & Mengikuti kajian manhaj salaf dengan rutin.
          </label>
        </td>

        </td>
      </tr>
      <tr>
        <td>
          <label>
            <input type="radio" name="tiga" value=2>
            <br>
            Mampu menjelaskan secara umum,
            pernah” mengikuti kajian manhaj salaf.
            Insya Allah mau belajar lebih jauh tentang manhaj salaf.

          </label>
        </td>
      </tr>
      <tr>
        <td>
          <label>
            <input type="radio" name="tiga" value=1>
            <br>
            Tidak pernah mendengar tentang manhaj salaf
          </label>
        </td>
      </tr>
      <tr><td colspan=3><hr></td></tr>


      <!-- Pertanyaan empat -->
      <tr>
        <td rowspan=4 class="partanyaan">
          Bagaimana pola belajar anak selama ini di rumah?

        </td>
        <td rowspan=4><textarea name="text-empat"></textarea>
      </tr>
      <tr>
        <td>
          <label>
            <input type="radio" name="empat" value=3>
            <br>
            Menekankan pada pendampingan belajar, disiplin waktu (berpola), Mengukur kemajuan belajar,
            berupaya untuk memperbaiki kekurangan anak, berupaya untuk mengarahkan anak agar mampu belajar
            dengan strategi yang baik & Mau berkerja sama dalam komitmen dalam pernyataan Orangtua ku Madrasah ku

          </label>
        </td>

        </td>
      </tr>
      <tr>
        <td>
          <label>
            <input type="radio" name="empat" value=2>
            <br>
            Melakukan pendampingan dalam belajar namun tidak memiliki strategi pendampingan yang baik
          </label>
        </td>
      </tr>
      <tr>
        <td>
          <label>
            <input type="radio" name="empat" value=1>
            <br>
            Tidak melakukan pendampingan dan membiarkan anak belajar sendiri.
          </label>
        </td>
      </tr>
      <tr><td colspan=3><hr></td></tr>

      <!-- Pertanyaan lima -->
      <tr>
        <td rowspan=4 class="partanyaan">
          Apa yang dirasakan Bapak dan Ibu apabila mengetahui nilai-nilai ananda di bawah KKM?
Bentuk respon yang bagaimana, yang Bapak dan Ibu tunjukkan kepada ananda?

        </td>
        <td rowspan=4><textarea name="text-lima"></textarea>
      </tr>
      <tr>
        <td>
          <label>
            <input type="radio" name="lima" value=3>
            <br>
             Interospeksi diri melihat apa yang kurang dalam pendampingan di rumah

          </label>
        </td>

        </td>
      </tr>
      <tr>
        <td>
          <label>
            <input type="radio" name="lima" value=2>
            <br>
            Menyalahkan anak
          </label>
        </td>
      </tr>
      <tr>
        <td>
          <label>
            <input type="radio" name="lima" value=1>
            <br>
            Menyalahkan guru/ sekolah
          </label>
        </td>
      </tr>
      <tr><td colspan=3><hr></td></tr>

      <!---------------------------------------------------------------------------------------------------------------------->
      <!---------------------------------------------------- Pertanyaan enam ------------------------------------------------>
      <!---------------------------------------------------- Pertanyaan enam ------------------------------------------------>
      <!---------------------------------------------------------------------------------------------------------------------->
      <tr>
        <td rowspan=4 class="partanyaan">
          Bapak/ibu ada TV di rumah? apa yang biasa bapak ibu tonton dan bagaimana dengan anak-anak,
          Apakah anak-anak biasa pegang gadget, apa yang mereka lakukan dengan gadgetnya, bagaimana sikapnya ketika dilarang,
          Bersediakah untuk dilarang atau dibatasi penggunaannya?
        </td>
        <td rowspan=4><textarea name="text-enam"></textarea>
      </tr>
      <tr>
        <td>
          <label>
            <input type="radio" name="enam" value=3 required>
            <br>
            Tidak menonton TV kecuali tayangan yang baik,
            Tidak diberikan gadget, hanya boleh memegang gadget didampingi atau pinjam punya orang tua dalam rangka mengenalkan teknologi, &
            Tidak diperkenankan memiliki akun medsos dan sebagainya.


          </label>
        </td>

        </td>
      </tr>
      <tr>
        <td>
          <label>
            <input type="radio" name="enam" value=2>
            <br>
              Memiliki gadget dengan pemberian nasihat atau perjanjian diawal, namun terkadang anak boleh memainkan gadet di kamar secara mandiri,
              Menonton TV namun tidak terlalu ketat mengawasi anak. Terkadang anak boleh nonton TV sendiri dengan chanel yang tidak dikontrol, &
              Memiliki akun medsos dengan pengawasan yang tidak terlalu ketat.

          </label>
        </td>
      </tr>
      <tr>
        <td>
          <label>
            <input type="radio" name="enam" value=1>
            <br>
              Menonton TV dengan tidak mempedulikan kontrol, bersama-sama maupun sendiri,
              Menggunakan gadget dengan leluasa, &
              Memiliki akun medsos tanpa pengawasan.

          </label>
        </td>
      </tr>
      <tr><td colspan=3><hr></td></tr>


      <!---------------------------------------------------------------------------------------------------------------------->
      <!---------------------------------------------------- Pertanyaan tujuh ------------------------------------------------>
      <!---------------------------------------------------- Pertanyaan tujuh ------------------------------------------------>
      <!---------------------------------------------------------------------------------------------------------------------->
      <tr>
        <td rowspan=4 class="partanyaan">
          Respon orang tua siswa tentang program di sekolah, contoh: Mutabaah Yaumiyah,  Pengembangan Pembelajaran Alquran (PPA)
          <i>bersediakah mengikuti program sekala berkala ?</i>
        </td>
        <td rowspan=4><textarea name="text-tujuh"></textarea>
      </tr>
      <tr>
        <td>
          <label>
            <input type="radio" name="tujuh" value=3 required>
            <br>
            Antusias mendengarkan penjelasan & Siap untuk berkontribusi dan mengikuti kegiatan parenting secara berkala.
          </label>
        </td>

        </td>
      </tr>
      <tr>
        <td>
          <label>
            <input type="radio" name="tujuh" value=2>
            <br>
              Mendengarkan penjelasan, Siap mengikuti kegiatan parenting dan pola pengajaran di sekolah.
          </label>
        </td>
      </tr>
      <tr>
        <td>
          <label>
            <input type="radio" name="tujuh" value=1>
            <br>
              Tidak bersedia, atau Bersedia dengan beberapa syarat misal “oke saja asal tidak mengganggu aktivitas saya” dsb.
          </label>
        </td>
      </tr>
      <tr><td colspan=3><hr></td></tr>

       <!---------------------------------------------------------------------------------------------------------------------->
      <!---------------------------------------------------- Pertanyaan delapan ------------------------------------------------>
      <!---------------------------------------------------- Pertanyaan delapan ------------------------------------------------>
      <!---------------------------------------------------------------------------------------------------------------------->
      <tr>
        <td rowspan=4 class="partanyaan">
          Apakah jika anak bapak/ibu diterima di SDIT Anak Shalih, bersedia melunasi biaya pendidikan secara tunai sekali pembayaran?
          <br>
          <!-- <i style="color: red">Pembayaran adalah 1 minggu setelah pengumuman kelulusan tgl 27 Januari 2020</i>
          <br>
          <i style="color: red">(apabila 2X  pembayaran cicilan pertama minimal 11,5 jt dan sisanya di akhir bulan Maret, jika tidak lunas
          dianggap mengundurkan diri)</i> -->
        </td>
        <td rowspan=4><textarea name="text-delapan"></textarea>
      </tr>
      <tr>
        <td>
          <label>
            <input type="radio" name="delapan" value=3 required>
            <br>
            Siap 1 kali bayar
          </label>
        </td>
        </td>
      </tr>
      <tr>
        <td>
          <label>
            <input type="radio" name="delapan" value=2>
            <br>
              Siap namun dengan beberapa toleransi
          </label>
        </td>
      </tr>
      <tr>
        <td>
          <label>
            <input type="radio" name="delapan" value=1>
            <br>
              Tidak siap
          </label>
        </td>
      </tr>
      <tr><td colspan=3><hr></td></tr>


      <!---------------------------------------------------------------------------------------------------------------------->
      <!---------------------------------------------------- Pertanyaan sembilan ------------------------------------------------>
      <!---------------------------------------------------- Pertanyaan sembilan ------------------------------------------------>
      <!---------------------------------------------------------------------------------------------------------------------->
      <tr>
        <td rowspan=4 class="partanyaan">
          Bagaimana pendapat anda jika kami memberikan sanksi administrasi kepada orang tua yang tidak disiplin administrasi
          tanpa konfirmasi kepada pihak sekolah bahkan menolak untuk dikonfirmasi
        </td>
        <td rowspan=4><textarea name="text-sembilan"></textarea>
      </tr>
      <tr>
        <td>
          <label>
            <input type="radio" name="sembilan" value=3 required>
            <br>
            Setuju
          </label>
        </td>
        </td>
      </tr>
      <tr>
        <td>
          <label>
            <input type="radio" name="sembilan" value=2>
            <br>
              Kurang setuju
          </label>
        </td>
      </tr>
      <tr>
        <td>
          <label>
            <input type="radio" name="sembilan" value=1>
            <br>
              Tidak setuju
          </label>
        </td>
      </tr>
      <tr><td colspan=3><hr></td></tr>


      <!---------------------------------------------------------------------------------------------------------------------->
      <!---------------------------------------------------- Pertanyaan sepuluh ------------------------------------------------>
      <!---------------------------------------------------- Pertanyaan sepuluh ------------------------------------------------>
      <!---------------------------------------------------------------------------------------------------------------------->
      <tr>
        <td rowspan=4 class="partanyaan">
          Kontribusi seperti apa yang akan bapak-ibu lakukan jika anak diterima di SDIT
          <br>
          jika infaq berapa jumlahnya?
          <hr>
          <div class="p-3 mb-2 bg-info text-dark">
            <?php
            // kode infaq
              // print_r ($hasil_kontribusi);
              if ($hasil_kontribusi["result"] == "ada kontribusi"){

                if (array_key_exists("Infaq umum", $hasil_kontribusi["values"])){
                  echo "Infaq Umum : <b>" . $hasil_kontribusi["values"]["Infaq umum"]."</b>";
                }
                else {
                  echo "Tidak ada infaq umum";
                }
                echo "<hr>";
                if (array_key_exists("Keterampilan/keahlian", $hasil_kontribusi["values"])){
                  echo "Keterampilan/keahlian : <b>" . $hasil_kontribusi["values"]["Keterampilan/keahlian"]."</b>";
                }
                else {
                  echo "Tidak ada kontribusi Keterampilan/keahlian";
                }

                echo "<hr>";

                if (array_key_exists("Lainnya", $hasil_kontribusi["values"])){
                  echo "Lainnya : <b>" . $hasil_kontribusi["values"]["Lainnya"]."</b>";
                }
                else {
                  echo "Tidak ada kontribusi Lainnya";
                }

              }
              else {
                echo  "Tidak ada kontribusi apa-apa";
              }
            ?>

          </div>
        </td>
        <td rowspan=4><textarea name="text-sepuluh"></textarea>
      </tr>
      <tr>
        <td>
          <label>
            <input type="radio" name="sepuluh" value=3 required>
            <br>
            (Infaq dan atau skill yang bisa dikontribusikan untuk sekolah)
          </label>
        </td>
        </td>
      </tr>
      <tr>
        <td>
          <label>
            <input type="radio" name="sepuluh" value=2>
            <br>
              Bepikir (kira-kira saya bisa ini)
          </label>
        </td>
      </tr>
      <tr>
        <td>
          <label>
            <input type="radio" name="sepuluh" value=1>
            <br>
              Tidak
          </label>
        </td>
      </tr>
      <tr><td colspan=3><hr></td></tr>


      <!---------------------------------------------------------------------------------------------------------------------->
      <!---------------------------------------------------- Pertanyaan sebelas ------------------------------------------------>
      <!---------------------------------------------------- Pertanyaan sebelas ------------------------------------------------>
      <!---------------------------------------------------------------------------------------------------------------------->
      <tr>
        <td rowspan=4 class="partanyaan">
          Kami memiliki program dompet pendidikan untuk membantu anak-anak yang memiliki keterbatasan finansial apakah bapak/ibu
          <br>
          <i style="color: red">Pewawancara menjelaskan sejara singkat program dompet pendidikan</i>

          <div class="p-3 mb-2 bg-info text-dark">
            <?php
            // kode dompet pendidikan
              // print_r ($hasil_kontribusi["values"]["Dompet Pendidikan Tetap"]);
              if ($hasil_kontribusi["result"] == "ada kontribusi"){
                if (array_key_exists("Dompet Pendidikan Tetap", $hasil_kontribusi["values"])){
                  echo "Infaq dompet pendidikan Tetap : <b>" . $hasil_kontribusi["values"]["Dompet Pendidikan Tetap"]."</b>";
                }
                elseif (array_key_exists("Dompet Pendidikan Tidak Tetap", $hasil_kontribusi)){
                  echo "Infaq dompet pendidikan Tidak Tetap : " . $hasil_kontribusi["values"]["Dompet Pendidikan Tidak Tetap"];
                }
                else {
                  echo "Tidak ada dompet pendidikan";
                }

              }
              else {
                echo  "Tidak ada kontribusi apa-apa.";
              }
            ?>

          </div>
        </td>
        <td rowspan=4><input type="number" name="text-sebelas" min=0>
      </tr>
      <tr>
        <td>
          <label>
            <input type="radio" name="sebelas" value=3  required>
            <br>
            Siap bantu menjadi donatur tetap
          </label>
        </td>
        </td>
      </tr>
      <tr>
        <td>
          <label>
            <input type="radio" name="sebelas" value=2>
            <br>
              Befikir (kira-kira saya bisa ini)
          </label>
        </td>
      </tr>
      <tr>
        <td>
          <label>
            <input type="radio" name="sebelas" value=1>
            <br>
              Tidak
          </label>
        </td>
      </tr>
      <tr><td colspan=3><hr></td></tr>


      <!---------------------------------------------------------------------------------------------------------------------->
      <!---------------------------------------------------- Pertanyaan Duabelas ------------------------------------------------>
      <!---------------------------------------------------- Pertanyaan Duabelas ------------------------------------------------>
      <!---------------------------------------------------------------------------------------------------------------------->
      <tr>
        <td rowspan=4 class="partanyaan">
            <li>Kesan pesan terhadap sekolah ananda sebelumnya</li>
            <li>Bagaimana pendapat anda jika ada orangtua siswa ceroboh menyebarkan berita yang merugikan sekolah,
            kemudian sekolah memberikan sanksi terkait hal tersebut?</li>
        </td>
        <td rowspan=4><textarea name="text-duabelas"></textarea>
      </tr>
      <tr>
        <td>
          <label>
            <input type="radio" name="duabelas" value=3 required>
            <br>
            Respone yang baik
          </label>
        </td>
        </td>
      </tr>
      <tr>
        <td>
          <label>
            <input type="radio" name="duabelas" value=2>
            <br>
              Respone dengan jawaban formal
          </label>
        </td>
      </tr>
      <tr>
        <td>
          <label>
            <input type="radio" name="duabelas" value=1>
            <br>
              Respone jelek / menyudutkan sekolah
          </label>
        </td>
      </tr>
      <tr><td colspan=3><hr></td></tr>
      <input id="no_peserta" name="no_peserta" type="text" value="<?php echo $detail['no_peserta']?>" style="display: none">
      <input name="pewawancara" type="text" value="<?php echo $biodata['nama_depan']." ".$biodata['nama_belakang']?>" style="display: none">
      <tr><td colspan=3><input name="wawancara" type="submit"></td></tr>
    </table>
  </form>
</div>
<script src="ajax.js"></script>
