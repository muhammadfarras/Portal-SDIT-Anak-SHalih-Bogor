<?php

/**
 *
 */
class Hasil
{
  $no_peserta;
  $tp;
  $pewawancaran;
  $waktu;
  $nilai;
  function __construct($nopes,$tp,$pewawancara,$waktu,$nilai);
  {
    $this->no_peserta = $nopes;
    $this->tp = $tp;
    $this->pewawancara = $pewawancara;
    $this->waktu = $waktu;
    $this->nilai = $nilai;
  }
}

?>
