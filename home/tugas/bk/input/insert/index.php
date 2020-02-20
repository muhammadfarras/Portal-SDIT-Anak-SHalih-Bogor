<?php

require ("../../../../../advance.php");
isCookieSet();
if (isJobDefined ($_COOKIE['id'],'Catat Rekam Prilaku')){
    header ("location: ../../error.php");
}
if (empty ($_POST)){
    header ("location: ../");
}
$data = setGoodMysqli ($_POST);
$data['waktu'] = date("Y-m-d", time());
$data['inputer'] = $_COOKIE['id']; 
include_once ("load.php");



// Validasi
class Validasi{
    public $asked = ["kognitif","sosial","emosi","wawasan_pengetahuan","bahasa"];
    public $countAsked;
    public $arrays;
    public $key;
    
    public function __construct (Array $array){
        $this->arrays = $array;
        $this->key = array_keys ($array);
        $this->countAsked = count ($this->asked);
        $this->countArray = count($this->arrays);
    }
    
    public function ValidateArray () {
        $result = false;
        $data = $this->arrays;
        $asked = $this->asked;
        if (isset($data[$asked[0]])){
            if (isset($data[$asked[1]])){
                if (isset($data[$asked[2]])){
                    if (isset($data[$asked[3]])){
                        if (isset($data[$asked[4]])){
                            $result = true;
                        }
                    }       
                }
            }
        }
        
        if (!$result){
            // Ada yang coba ngubah name di input filed
            header ("location: ../");
            
        }
        return $result;
    }
    
    public function OneOfThemEmpty (){
        $result = false;
        $data = $this->arrays;
        $asked = $this->asked;
        if (empty($data[$asked[0]])){
            if (empty($data[$asked[1]])){
                if (empty($data[$asked[2]])){
                    if (empty($data[$asked[3]])){
                        if (empty($data[$asked[4]])){
                            $result = true;
                        }
                    }       
                }
            }
        }
        if ($result){
            // Ada yang coba ngubah name di input filed
            header ("location: $data[url]");
            
        }
        return $result;
    }
    
    public function shiftArray () {
        $array = $this->arrays;
        for ($i = 0 ; $i < $this->countArray - $this->countAsked ; $i++ ){
            array_pop ($array);
        }
        
        return $array;
    }
}

$obj = new Validasi($data);

// Validasi array menghindari perubahan nama input
$obj->ValidateArray();

// Validasi array jika salah satu harus ada nilai
$obj->OneOfThemEmpty();


$arrayValue = $obj->arrays;
$arrayKey = $obj->key;
$arrayAsked = $obj->asked;

$count = count ($obj->shiftArray());

$succsess = 0;
$tampung = "";
for ($i = 0 ; $i < $count ;$i++){
    if (!empty($data[$arrayKey[$i]])){
        
        // echo "key dari $arrayKey[$i] sama dengan index ".array_search ($arrayKey[$i],$arrayAsked)." ".$data[$arrayKey[$i]]."<br>";
        
        $query = "INSERT INTO bk_kar_perkembangan (nis,inf_id,keterangan,waktu,petugas) ";
        $query .= "VALUES ('$data[nis]','".array_search ($arrayKey[$i],$arrayAsked)."','".$data[$arrayKey[$i]]."','$data[waktu]','$data[inputer]')"; 
        
        
        $mysqli = mysqli_query ($connect,$query);
        
        if (mysqli_error ($connect)){
            header ("location: error.php");
        }
        if (mysqli_affected_rows ($connect)){
            $succsess += 1;
        }
        
    }
    
}
if ( $succsess >= 1 ) {
    header("Refresh:3; url= $data[url]");
}
echo $succsess;








?>  