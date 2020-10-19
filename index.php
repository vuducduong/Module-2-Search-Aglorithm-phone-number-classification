<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <textarea name="enter"></textarea>
    <button type="submit">Click</button>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $textArea = $_REQUEST["enter"];
    $listViettel = array();
    $listVinaphone = array();
    $listMobifone = array();

    $viettel = ['032', '033', '034', '035', '036', '037', '038', '039', '096', '097', '098', '086'];
    $vinaphone = ['081', '082', '083', '084', '085', '088', '094', '091'];
    $mobifone = ['070', '079', '077', '076', '078', '090', '093', '089'];

    $textArea = explode(",",$textArea);
//    var_dump($textArea);
//    die();
    for($i=0;$i<count($textArea);$i++){
            $number = str_split($textArea[$i],3);
            if(in_array($number[0],$viettel)){
                array_push($listViettel,$textArea[$i]);
            }
            else if(in_array($number[0],$mobifone)){
                array_push($listMobifone,$textArea[$i]);
            }
            else if(in_array($number[0],$vinaphone)){
                array_push($listVinaphone,$textArea[$i]);
            }
    }
    echo "Viettel";
    echo "<pre>";
    print_r($listViettel);
    echo "Vinaphone";
    echo "<pre>";
    print_r($listVinaphone);
    echo "Mobifone";
    echo "<pre>";
    print_r($listMobifone);
}