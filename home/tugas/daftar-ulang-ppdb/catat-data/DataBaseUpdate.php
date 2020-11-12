<?php
class DataBaseUpdate {
  public $nama;
  public $namaAyah;
  public $emailAyah;
  public $noAyah;
  public $namaIbu;
  public $emailIbu;
  public $noIbu;
  private $tp;
  private $connect;

  function __construct($arrayData,$tp,$connect){
    $this->nama = $arrayData[0];
    $this->namaAyah = $arrayData[1];
    $this->emailAyah = $arrayData[2];
    $this->noAyah = $arrayData[3];
    $this->namaIbu = $arrayData[4];
    $this->emailIbu = $arrayData[5];
    $this->noIbu = $arrayData[6];
    $this->tp = $tp;
    $this->connect = $connect;
  }

  public function saveToDb(){
    $query = "INSERT INTO ppdb_peserta_sementara ( `tp`, `nama`, `nama_ayah`, `email_ayah`, `no_ayah`, `nama_ibu`, `email_ibu`, `no_ibu`)
     VALUES (
     '$this->tp',
     '$this->nama',
     '$this->namaAyah',
     '$this->emailAyah',
     '$this->noAyah',
     '$this->namaIbu',
     '$this->emailIbu',
     '$this->noIbu')";

     $mysqliQuery = mysqli_query ($this->connect, $query);
     echo mysqli_error($this->connect);
     if (!mysqli_affected_rows ($this->connect)){
       return false;
     }
     else {
       return true;
     }
  }

  public function isDbupdated($id){
    $query = "UPDATE `ppdb_peserta_sementara`
    SET `nama`='$this->nama',`nama_ayah`='$this->namaAyah',
    `email_ayah`='$this->emailAyah',`no_ayah`='$this->noAyah',`nama_ibu`='$this->namaIbu',
    `email_ibu`='$this->emailIbu',
    `no_ibu`='$this->noIbu' WHERE no_id = '$id'";
    
    $mysqliQuery = mysqli_query ($this->connect, $query);

    echo mysqli_error($this->connect);
    if (!mysqli_affected_rows ($this->connect)){
      return false;
    }
    else {
      return true;
    }
  }

  public function getNama (){
    return $this->nama;
  }

  public function __toString(){
    return "yeah";
  }

}

?>
