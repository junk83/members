<?php

//テキストファイル
$fileName = "members.txt";
//出力データの配列を宣言
$datas = array();


if($_SERVER['REQUEST_METHOD'] == 'GET')
{
    //GETパラメータにformatが未設定の場合はnullとする
    $format = isset($_GET['format']) ? $_GET['format'] : null;

    //フォーマットファイルのパスを生成
    $file = 'views/' . $format . '.php';

    //フォーマットファイルとGETパラメータのチェック
    if (!file_exists($file) || !$format) {
        echo "パラメータが不正です。";
        exit;
    }

    //members.txtファイルを開く
    if(!$fp = fopen($fileName, "r")){
      echo "ファイルを開けませんでした。";
      exit;
    }

    //members.txtファイルからデータを1行ずつ読み込む
    while($line = fgets($fp))
    {
        //改行を除去
        $line = str_replace(PHP_EOL, '', $line);
        //出力データ配列のキーを設定
        $data_key = array("id", "name", "email");
        //出力データを設定
        $data_val = explode(" ", $line);
        //キーと出力データで連想配列を生成
        $data = array_combine($data_key, $data_val);
        //出力データの配列に格納
        array_push($datas, $data);
    }

    //ファイルを閉じる
    fclose($fp);

    //バッファリングを有効化
    ob_start();
    //フォーマットファイルを読み込む
    require $file;
    //バッファ内容を取得
    $contents = ob_get_clean();

    echo $contents;
}


