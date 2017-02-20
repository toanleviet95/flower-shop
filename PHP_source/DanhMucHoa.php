<?php
$LoaiHoa = array();
$kq = "";
include_once("HamXuLyTapTin.php");
$LoaiHoa = DocRaBang("du_lieu/loai.txt", $kq);
foreach($LoaiHoa as $loai)
	echo"<a href='index.php?MaLoai=".$loai[0]."'><b>".$loai[1]."</b></a><br>";	
?>
