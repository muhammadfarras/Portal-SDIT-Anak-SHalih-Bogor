<?php
class FindDb {
  public $findName;
  function __construct($findName,$connect){
    $this->findName = $findName;
    $this->connect = $connect;
  }

  public function isFindFromDb(){
    $query = "SELECT * FROM ppdb_peserta_sementara WHERE nama LIKE '%$this->findName%' LIMIT 7";

     $mysqliQuery = mysqli_query ($this->connect, $query);

     echo mysqli_error($this->connect);
     if (!mysqli_affected_rows ($this->connect)){
       return false;
     }
     else {
       return true;
     }
   }


     public function showFind(){
       $query = "SELECT * FROM ppdb_peserta_sementara WHERE nama LIKE '%$this->findName%' AND sudah_daftar = 0 LIMIT 7";

        $mysqliQuery = mysqli_query ($this->connect, $query);

        // Tampilkan Data
        echo '<ul class="list-unstyled">';
        while ($row = mysqli_fetch_assoc ($mysqliQuery)) {
          ?>

          <li class="media">
            <button name="tujuan" targetId = "<?php echo $row['no_id'] ?>"  target="<?php echo $row['nama'] ?>" class="btn btn-outline-success media-body border border-success mb-3 p-4 rounded">
              <h5 class="mt-0 mb-1"><?php echo $row['nama']?></h5>
          </li>

          <?php
        }
        echo "</ul>";
      }

      public function showFetchAssoc (){
        $query = "SELECT * FROM ppdb_peserta_sementara WHERE nama = '$this->findName'";

         $mysqliQuery = mysqli_query ($this->connect, $query);

         $row = mysqli_fetch_assoc ($mysqliQuery);
         echo (json_encode ($row));

      }

      public function getId(){
        $query = "SELECT * FROM ppdb_peserta_sementara WHERE nama = '$this->findName'";

         $mysqliQuery = mysqli_query ($this->connect, $query);

         $row = mysqli_fetch_assoc ($mysqliQuery);
         echo $row['no_id'];
      }
}

?>
