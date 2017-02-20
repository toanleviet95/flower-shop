<?php
if(isset($_POST["TenHoa"]))
{
	$TenHoa=$_POST["TenHoa"];
	$LoaiHoa=$_POST["LoaiHoa"];
	$MoTa=$_POST["MoTa"];
	$GiaBan=$_POST["GiaBan"];
	$HinhHoa=$_FILES["file_upload"]["name"];
	$kq="";
	include_once("HamXuLyTapTin.php");
	$BangHoa=DocRaBang("du_lieu/hoa.txt",$kq);
	$MaHoa=count($BangHoa)+1;
	$hoa=PHP_EOL."/*$MaHoa|$LoaiHoa|$TenHoa|$GiaBan|$HinhHoa|$MoTa";
	GhiThem("du_lieu/hoa.txt",$hoa);
	move_uploaded_file($_FILES["file_upload"]["tmp_name"],"hinh_anh/".$HinhHoa);
	echo"<script>alert('Đã Thêm Thành công')</script>";
}
?>