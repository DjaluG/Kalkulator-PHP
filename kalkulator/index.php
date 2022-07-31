<?php
include "funsgi.php";
$kalku = new Kalkulator();

function eEcho($a){
    echo $a;
}

function Br(){
    echo "<br>";
}

eEcho("<h1>Kalkulator PHP</h1>");
eEcho("<form method='post'>");
eEcho("<input type='text' name='angka1' placeholder='Masukkan angka 1'><br>");
eEcho("<select name='operasi'>
<option value='tambah'>+</option>
<option value='kurang'>-</option>
<option value='kali'>x</option>
<option value='bagi'>/</option>
</select><br>");
eEcho("<input type='text' name='angka2' placeholder='Masukkan angka 2'><br>");
eEcho("<input type='submit' name='submit' value='Hitung'>");
eEcho("</form>");

if ($_POST){
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    if($_POST['operasi'] == 'tambah'){
        eEcho("Hasil: $angka1 + $angka2 = ".$kalku->setTambah($angka1, $angka2));
    } elseif ($_POST['operasi'] == 'kurang'){
        eEcho("Hasil: $angka1 - $angka2 = ".$kalku->setKurang($angka1, $angka2));
    } elseif ($_POST['operasi'] == 'kali'){
        eEcho("Hasil: $angka1 x $angka2 = ".$kalku->setKali($angka1, $angka2));
    } elseif ($_POST['operasi'] == 'bagi'){
        eEcho("Hasil: $angka1 / $angka2 = ".$kalku->setBagi($angka1, $angka2));
    }
}