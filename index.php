<?php
session_start();
// Lưu mật khẩu bằng cookie
if(isset($_REQUEST["luu"]))
{
	setcookie("hoten",$_SESSION["hoten"],time()+60*60*24);
	setcookie("email",$_SESSION["email"], time()+60*60*24);
}

// Xử lý session giỏ hàng
if(isset($_REQUEST["mh"]))
{
	if(isset($_SESSION["giohang"]))
		$giohang=$_SESSION["giohang"];
	else
		$giohang=array();
	$mh=$_REQUEST["mh"];
	if(isset($giohang[$mh]))
		$giohang[$mh]+=1;
	else
		$giohang[$mh]=1;
	$_SESSION["giohang"]=$giohang;
}

// Hủy session và cookie khi đăng xuất
if(isset($_REQUEST["thoat"]))
{
	 unset($_SESSION["hoten"]);
	 unset($_SESSION["email"]);
	 setcookie("hoten","",time()-60*60*24);
	 setcookie("email","",time()-60*60*24);
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cua hang Hoa Dep</title>
<style type="text/css">
<!--
.style2 {
	color: #000099;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: smaller;
}
.style3 {
	color: #006633;
	font-weight: bold;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: smaller;
}
.style5 {
	font-size: smaller;
	font-weight: bold;
	color: #009933;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style10 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: smaller; }
a:link {
	color: #006633;
}
a:visited {
	color: #006633;
}
a:hover {
	color: #009900;
}
a:active {
	color: #009900;
}
.style12 {font-size: smaller}
-->
</style>
</head>

<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr bgcolor="#F4FBEB">
    <td width="21%" valign="top"><img src="hinh_anh/LogotypeKvitka.gif" width="205" height="102" /></td>
    <td width="28%" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="2">
      <tr>
        <td><span class="style5">(08) 9891234 </span></td>
      </tr>
      <tr>
        <td><span class="style10">(Giờ mở cửa: 8:00 - 22:00 mỗi ngày) </span></td>
      </tr>
      <tr>
        <td><span class="style10"><img src="hinh_anh/IconMail.gif" width="16" height="16" /> <a href="./toanleviet95@gmail.com">toanleviet95@gmail.com </a></span></td>
      </tr>
      <tr>
        <td><span class="style10"><img src="hinh_anh/online0.gif" width="18" height="18" />hoadep.com.vn</span></td>
      </tr>
    </table></td>
    <td align="center" width="27%" valign="top">
<?php
if(!isset($_SESSION["hoten"]))
    include_once("PHP_source/KhungDangNhap.php"); 
else
    echo "Họ và tên: <b>".$_SESSION["hoten"]."</b></br>Email: <b>".$_SESSION["email"]."</b><a href='index.php?thoat=1'><b>Đăng xuất</b></a>"; 
?></td>
    <td width="24%" valign="top"><table width="100%" border="0">
      <tr>
        <td valign="top"><div align="center" class="style5">          Có thể thanh toán bằng</div></td>
      </tr>
      <tr>
        <td valign="top"><div align="center" class="style10">
		<img src="hinh_anh/IconCardMasterCard.gif" width="37" height="23" />
		<img src="hinh_anh/IconCardVisaE.gif" width="37" height="23" />
		<img src="hinh_anh/IconCardVisa.gif" width="37" height="23" /></div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td valign="top" bgcolor="#D3F4CE"><span class="style3">&nbsp;Danh mục hoa</span></td>
    <td colspan="3" valign="top" background="hinh_anh/nen.jpg"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr align="center" class="style10" bgcolor="#CCFFCC">
        <td width="25%" height="23" bgcolor="#CCFFCC"><strong><a href="index.php"><strong>Trang chủ</strong></a></td>
        <td width="25%"><strong><a href="trang_tim_kiem_hoa.php"><strong>Tìm kiếm bó hoa</strong></a></td>
        <td width="22%"><strong><a href="trang_dang_ky.php">Đăng ký tài khoản</a></strong></td>
      </tr>
    </table></td>
  </tr>
  <tr bgcolor="#F4FBEB">
    <td valign="top" bgcolor="#F4FBEB"><table width="100%" border="0" cellpadding="0" cellspacing="0" background="hinh_anh/nen.jpg">
      <tr>
        <td bgcolor="#C7EAB0"><table width="100%" border="0" bgcolor="#F4FBEB">
            <tr>
              <td>
			  <?php include_once("PHP_source/DanhMucHoa.php") ?>			  </td>
            </tr>
            <tr>
              <td><?php include_once("PHP_source/GioHang.php") ?></td>
            </tr>
          </table>		  </td>
      </tr>
      <tr>
        <td valign="bottom" bgcolor="#F4FBEB"><img src="hinh_anh/BannerSideCreative.jpg" width="200" height="200" /></td>
      </tr>
    </table>    </td>
    <td colspan="3" valign="top" bgcolor="#FFFFFF">
	<?php include_once("PHP_source/HienThiHoa.php") ?></td>
  </tr>
  <tr>
    <td valign="top" bgcolor="#d3f4ce"><span class="style2">Copyright &copy;2013-2014 <br />
    Công ty thiết kế Ý Tưởng </span></td>
    <td valign="top" bgcolor="#d3f4ce">&nbsp;</td>
    <td valign="top" bgcolor="#d3f4ce">&nbsp;</td>
    <td bgcolor="#d3f4ce"><span class="style10"><img src="hinh_anh/IconMail.gif" width="16" height="16" />
	    <a href="./toanleviet95@gmail.com">toanleviet95@gmail.com</a>
      <br />
      <img src="hinh_anh/online0.gif" width="18" height="18" />hoadep.com.vn</span></td>
  </tr>
</table>
</body>
</html>
