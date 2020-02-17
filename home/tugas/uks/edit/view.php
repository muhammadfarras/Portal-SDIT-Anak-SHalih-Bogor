<!DOCTYPE html>
<html>
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body id="body">
  <a class="back" id="exit" href="../">
    Home
  </a>
  
  
      
  <h2 class="judul">Ubah / Hapus Catatan Kesehatan Siswa</h2>
  <div class="container">
    <table class="biodata">
      <tr>
        <th colspan=2>Biodata Siswa</th>
      </tr>
      <tr>
        <td>NIS</td>
        <td> : <?php echo $biodata['nis'];?></td>
      </tr>
      <tr>
        <td>Nama siswa</td>
        <td> : <?php echo ucwords ( strtolower ($biodata ['nama_siswa'] ) )?></td>
      </tr>
      <tr>
        <td>Kelas</td>
        <td> : <?php echo $kelas ['tingkat']."".$kelas ['kelas']?></td>
      </tr>
    </table>
    <br>
       
       <?php
          $obj = getHisKes ($biodata['nis']);
          
          if ($obj->num_rows > 0 ){
            $no = 0;
            while ($data = mysqli_fetch_assoc ($obj)){
                  $petugas = mysqli_fetch_assoc (getEmployeByid($data['petugas']));
                
                  $stmp = strtotime ($data['waktu']);
                  $date = date ("m",$stmp)."/".date ("d",$stmp)."/".date ("Y",$stmp);
              echo '<div class="card mb-3">
                      <div class="card-header">
                        '.setGoodDate ($data['waktu']).'
                        
                      </div>
                      <div class="dropdown mt-3 ml-3">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Ubah / Hapus
                        </a>
                      
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit-data'.$no.'">
                            Edit
                          </a>
                          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete-data'.$no.'">
                            Hapus
                          </a>
                        </div>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Keluhan</h5>
                          <p class="card-text text-left">'.$data['keluhan'].'</p>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Data Objek</h5>
                          <p class="card-text text-left">'.$data['data_objek'].'</p>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Diagnosa</h5>
                          <p class="card-text text-left">'.$data['diagnosa'].'</p>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Tindakan</h5>
                          <p class="card-text text-left">'.$data['tindakan'].'</p>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Keterangan</h5>
                          <p class="card-text text-left">'.$data['keterangan'].'</p>
                      </div>
                      
                      
                      
                      <!-- Button trigger modal -->
                      
                      
                      <!-- Modal Update -->
                      <form action="update/" method="post">
                      <div class="modal fade" id="edit-data'.$no.'" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="staticBackdropLabel">Edit Catatan Kesehatan</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            
                            
                              <div class="modal-body bg-dark">
                                
                                  <div class="form-group">
                                    <input name="nis" style="display: none" type="text" class="form-control" id="exampleFormControlInput1" value ='.$biodata['nis'].' readonly>
                                    <input name="id_pemeriksaan" style="display: none" type="text" class="form-control" id="exampleFormControlInput1" value ='.$data['id_pemeriksaan'].' readonly>
                                    <input name="target" style="display: none" type="text" class="form-control" id="exampleFormControlInput1" value ='.$_SERVER['REQUEST_URI'].' readonly>
                                  </div>
                                  <div class="form-group">
                                    <label for="for-waktu">Waktu Pemeriksaan</label>    
                                    <input value='.$date.' name="waktu" id="datepicker'.$no.'" type="text" width=200 class="form-control datepicker" id="for-waktu" autocomplete="off" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="for-keluhan">Keluhan</label>
                                    <textarea name="keluhan" class="form-control" id="for-keluhan" rows=3" required>'.$data['keluhan'].'</textarea>
                                  </div>
                                  <div class="form-group">
                                    <label for="for-data">Data Objecktif</label>
                                    <textarea name="data_objek" class="form-control" id="for-data" rows=3" required>'.$data['data_objek'].'</textarea>
                                  </div>
                                  <div class="form-group">
                                    <label for="for-diagnosa">Diagnosa</label>
                                    <textarea name="diagnosa" class="form-control" id="for-diagnosa" rows=3" required>'.$data['diagnosa'].'</textarea>
                                  </div>
                                  <div class="form-group">
                                    <label for="for-tindakan">Tindakan & Terapi</label>
                                    <textarea name="tindakan" class="form-control" id="for-tindakan" rows=3" required>'.$data['tindakan'].'</textarea>
                                  </div>
                                  <div class="form-group">
                                    <label for="for-keterangan">Keterangan</label>
                                    <textarea name="keterangan" class="form-control" id="for-keterangan" rows=3" required>'.$data['keterangan'].'</textarea>
                                  </div>
                                  
                              </div>
                            
                            <div class="modal-footer">
                              <button name="catat" value="catat" type="submit" class="btn btn-success">Ubah Rekam Kesehatan</button>
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              
                            </div>
                          </div>
                        </div>
                      
                      </div>
                      </form>
                      
                      
                      <!-- Modal Delete -->
                      <form action="delete/" method="post">
                      <div class="modal fade" id="delete-data'.$no.'" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="staticBackdropLabel">Delete Catatan Kesehatan</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                              <div class="modal-body bg-light">
                                
                                  <div class="form-group">
                                    <input name="nis" style="display: none" type="text" class="form-control" id="exampleFormControlInput1" value ='.$biodata['nis'].' readonly>
                                    <input name="id_pemeriksaan" style="display: none" type="text" class="form-control" id="exampleFormControlInput1" value ='.$data['id_pemeriksaan'].' readonly>
                                    <input name="target" style="display: none" type="text" class="form-control" id="exampleFormControlInput1" value ='.$_SERVER['REQUEST_URI'].' readonly>
                                    
                                    Apakah antum yakin ingin menghapus catatan kesehatan an <b>'.$biodata['nama_siswa'].'</b> pada '.setGoodDate ($data['waktu']).' ?
                                  </div>
                                  
                              </div>
                            
                            <div class="modal-footer">
                              <button name="catat" value="catat" type="submit" class="btn btn-danger">Hapus</button>
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              
                            </div>
                          </div>
                        </div>
                      </form>
                      </div>
                      
                      <div class="card-footer text-muted">Created By '.$petugas['nama_depan'].' '.$petugas['nama_belakang'].'</div>
                      ';?>
                      <script>
                        $('#datepicker<?php echo $no; ?>').datepicker({
                            uiLibrary: 'bootstrap4'
                        });
                      </script>
                      <?php echo '
                  </div>';
              $no+=1;
            }
            
          }
       ?>
       
  </div>

</body>
</html>
