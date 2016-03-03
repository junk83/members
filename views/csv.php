<?php
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=data.csv");

$fp = fopen("php://output", 'w');
$csv_header = array('ID', '名前', 'メールアドレス');

fputcsv($fp, $csv_header);

    foreach ($datas as $line) {
        fputcsv($fp, $line);
    }
fclose($fp);