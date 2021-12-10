<?php
class GravityFormApi {
    private $resultobject;
     
    function __construct() {
        
        $login="ck_cee4f8767fa67111a0b2e5d4dc0cfb58f172029d";
        $password="cs_88af0dc676083fe8ef4e233371db1c05fe9502e8";
        
        $url = 'https://anakshalihbogor.sch.id/wp-json/gf/v2/forms/26/entries/?paging[page_size]=140';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($ch, CURLOPT_USERPWD, "$login:$password");
        $result = curl_exec($ch);
        curl_close($ch);  
        //echo($result);
        $this->resultobject = (json_decode($result));
    }

    function getResult() {
        print_r( $this->resultobject);

    }

    function getResultByName($namaInput)
    {
        // variable that contains result form this function
        $resultKontribusi = [];

        //return $this->resultobject->entries[0];
        foreach ($this->resultobject->entries as $entries)
        {
            //print_r ($entries);
            // Check wether nama is exist or not
            $namaSiswa = $entries->{'540'}; 
            if ($namaSiswa == $namaInput){
                
                // Cek apakah siswa ada kontribusi atau tidak 
                if ($entries->{'854'} == "Ya")  {
                    

                    /*
                        kata kunci
                        Infaq umum
                        Infaq dompet pendidikan
                        Keterampilan/keahlian
                        Lainnya
                    */

                    // Varibel yang mengadung pilihan dari jenis kontribusi 
                    $infaqUmum = $entries->{'711.1'};
                    $infaqDpd = $entries->{'711.2'};
                    $infaqKeterampilan = $entries->{'711.3'};
                    $infaqLainnya = $entries->{'711.4'};
                    // Variabel yang menampung value dari jenis kontribusi
                    $valueInfaqUmum = $entries->{'855'};
                    $valueInfaqKeterampilan = $entries->{'860'};
                    $valueInfaqLainnya = $entries->{'752'};
                    $valueDompetPendidikan = 0;
                    $jenisDpd = "";

                    // Dompet Pendidikan
                    switch ($entries->{'856'}){
                        case "Ya":
                            $jenisDpd = "Dompet Pendidikan Tetap";
                            $valueDompetPendidikan = $entries->{'858'};
                            break;
                        case "Tidak":
                            $jenisDpd = "Dompet Pendidikan Tidak Tetap";
                            $valueDompetPendidikan = $entries->{'859'};
                            break;
                    }

                    $resultKontribusi["result"] = "ada kontribusi";
                    $resultKontribusi["values"] = [ 
                        $infaqUmum => $valueInfaqUmum, 
                        $infaqKeterampilan => $valueInfaqKeterampilan,
                        $infaqLainnya => $valueInfaqLainnya,
                        $jenisDpd => $valueDompetPendidikan];
                } 
                else {
                    $resultKontribusi["result"] = "tidak ada kontribusi";
                }

            } 

        }

        return $resultKontribusi;

    }

}
?>