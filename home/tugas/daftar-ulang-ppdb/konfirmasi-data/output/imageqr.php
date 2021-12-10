<?php
    $kodeQr = $_GET['id'];
    include('phpqrcode/qrlib.php');

    // outputs image directly into browser, as PNG stream
    QRcode::png($kodeQr);
