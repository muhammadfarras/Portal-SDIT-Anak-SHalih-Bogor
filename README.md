_Bismillah, segala puji hanya milik ALlah, tuhan satu-satunya yang berhak disembah_

# Portal Aplikasi SDIT-Anak Shalih Bogor
 Kumpulan aplikasi :school: SDIT Anak Shalih Bogor :school:

## Konfigurasi awal
Buatlah sebuah folder dengan nama .env pada root folder dan iskan nilai berikut
```
# Config DB
host = "host_anda"
user_name = "uname_anda"
pass = "password_anda"
db_name = "db_name_anda"

# Config PPDB DB
tahun_ppdb = "2023-2024"

# Tahun ppdb check
tahun_ppdb_check = "2023/2024"

apakah_kelompok = "tidak"  
# diisi yes atau tidak

# config email
email = "email_anda"
password = "password_anda"

# Jam Waktu PPDB
jam_waktu_ppdb = "07.30"

# Hari waktu test - tidak kelompok
#-------------------------------------
# Jika pilihan dari apakah_kelompok
# adalah tidak, maka tanggal test 
# dibawah ini yang digunakan
#------------------------------------
waktu_test_tdk_kelompok = "Hari, Tanggal"


# Hari waktu test - dengan kelompok
#-------------------------------------
# Jika pilihan dari apakah_kelompok
# adalah yes, maka tanggal test 
# dibawah ini yang digunakan
#------------------------------------
waktu_test_kelompok_1 = "Hari, Tanggal"
waktu_test_kelompok_2 = "Hari, Tanggal"
waktu_test_kelompok_3 = "Hari, Tanggal"
waktu_test_kelompok_4 = "Hari, Tanggal"
waktu_test_kelompok_5 = "Hari, Tanggal"
waktu_test_kelompok_6 = "Hari, Tanggal"
waktu_test_kelompok_7 = "Hari, Tanggal"
waktu_test_kelompok_8 = "Hari, Tanggal"
waktu_test_kelompok_9 = "Hari, Tanggal"
waktu_test_kelompok_10 = "Hari, Tanggal"
waktu_test_kelompok_11 = "Hari, Tanggal"
waktu_test_kelompok_12 = "Hari, Tanggal"
```

## Daftar Aplikasi
Aplikasi pada portal ini untuk memenuhi tugas beberapa kegiatan, berikut adalah daftarnya;


<table>
  <tr>
   <th>⬛ Program Kerja</th>
   <th>Aplikasi</th>
   <th>Deskripsi</th>
   <th>Stat</th>
  </tr>
  <tr>
   <th rowspan="6">Pendaftaran Peserta Didik Baru</th>
   <td><sub>Registrasi PPDB</sub></td>
   <td><sub>Pendataan ulang calon peserta PPDB yang sudah mendaftar</sub></td>
   <td align="center">:white_check_mark:</td>
  </tr>
 <tr>
   <td><sub>Daftar Ulang PPDB</sub></td>
   <td><sub>Mencetak dan mengirim email bukti registrasi ulang ke email orangtua yang bersangkutan</sub></td>
  <td align="center">:white_check_mark:</td>
  </tr>
 <tr>
  <td><sub>Registrasi Kedatangan Peserta PPDB</sub></td>
   <td><sub>Pendataan daftar hadir peserta PPDB. Sebagai alternatif dapat menggunakan aplikasi <a href="https://github.com/muhammadfarras/absen-ppdb-sdit-anshal">Absen PPDB SDIT Anashal</a></sub></td>
  <td align="center">:white_check_mark:</td>
  </tr>
 <tr>
  <td><sub>Pemanggil Peserta</sub></td>
   <td><sub>Daftar peserta PPDB berurut berdasarkan pendataan pada saat registrasi kedatangan peserta PPDB</sub></td>
  <td align="center">:white_check_mark:</td>
  </tr>
 <tr>
  <td><sub>Wawancara</sub></td>
   <td><sub>Daftar pertanyaan dan form isian hasil pada saat wawancara dengan orangtua siswa berlangsung</sub></td>
  <td align="center">:white_check_mark:</td>
  </tr>
 <tr>
  <td><sub>Rekap PPDB</sub></td>
   <td><sub>Download hasil wawancara beserta poin wawancara</sub></td>
  <td align="center">:white_check_mark:</td>
  </tr>
 
  <!-- Bimbingan Konseling -->
 <tr>
   <th rowspan=2>Bimbingan Konseling</th>
  <td><sub>Pencatatan Rekam Prilaku Siswa</sub></td>
  <td><sub>Rekam <i>karakter perkembangan</i>, <i>Prestasi Akademik</i> ,<i>Bakat & Minat</i> ,<i>Motivasi Belajar</i> ,<i>Latar Belakang Keluarga</i> , dan <i>Catatan Anekdot</i></sub></td>
   <td align="center">:sparkle:</td>
  </tr>
 <tr>
  <td><sub>Output Rekam Prilaku Siswa</sub></td>
  <td><sub>Menunduh hasil keluaran rekap prilaku siswa dalam bentuk :page_facing_up:file pdf:page_facing_up:</sub></td>
   <td align="center">:sparkle:</td>
  </tr>
 
 <!-- Unit Kesehatan SIswa -->
 <tr>
   <th rowspan=2>Unit Kesehatan Siswa</th>
  <td><sub>Pencatatan Rekam Prilaku Siswa</sub></td>
  <td><sub>Rekam <i>waktu pemeriksaan</i>, <i>keluhan</i> ,<i>data objektif</i> ,<i>diagnosa</i> ,<i>tindakan dan terapi</i> , dan <i>keterangan</i></sub></td>
   <td align="center">:sparkle:</td>
  </tr>
 <tr>
  <td><sub>Output Rekam Kesehatan Siswa</sub></td>
  <td><sub>Mengunduh hasil keluaran rekap kesehatan siswa dalam bentuk :page_facing_up:file pdf:page_facing_up:</sub></td>
   <td align="center">:sparkle:</td>
  </tr>
 
 
  <!-- Perpustakaan -->
 <tr>
   <th colspan=2>Perpustakaan</th>
  <td><sub>This apps has moved to <a href="https://github.com/muhammadfarras/Perpus-SDIT-Anak-Shalih-Bogor-Absensi">Perpus-SDIT-Anak-Shalih-Bogor-Absensi</a></sub></td>
   <td align="center">:x:</td>
  </tr>
</table>

- ✅ Aplikasi secara aktif digunakan
- ❇️ Aplikasi tidak secara aktif atau belum digunakan
- :x: Aplikasi tidak dapat digunakan, tidak diteruskan