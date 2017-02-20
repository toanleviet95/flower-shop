<?php
include_once("HamXuLyTapTin.php");
if(isset($_POST["DangKy"]))
{
    if($_POST["ten_dn"] and $_POST["mat_khau"] and $_POST["mat_khau_xn"] and $_POST["email"] and $_POST["ho_ten"])
    {
    if($_POST["mat_khau"] == $_POST["mat_khau_xn"])
    {
        $thong_tin=PHP_EOL."/*".$_POST["ten_dn"]."|".$_POST["mat_khau"]."|".$_POST["ho_ten"]."|".$_POST["dia_chi"]."|".$_POST["so_dt"]."|".$_POST["email"];
        GhiThem("du_lieu/khach_hang.txt",$thong_tin);
        echo "<script>alert('Đăng ký thành công !')</script>";
       	echo"<script>window.location='index.php';</script>";
    }
    else
        echo "<script>alert('Mật khẩu xác nhận không đúng !')</script>";
    }
    else 
        echo "<script>alert('Bạn phải điền đầy đủ thông tin !')</script>";
}
?>