 <?php
if(isset($_POST["ten_dn"]))
{
	include_once("HamXuLyTapTin.php");
	$kq="";
	$bangkh=DocRaBang("du_lieu/khach_hang.txt", $kq);
	$tendn=$_POST["ten_dn"];
	$matkhau=$_POST["mat_khau"];
	foreach($bangkh as $kh)
	{
		if($kh[0]==$tendn && $kh[1]==$matkhau)
		{
			$_SESSION["hoten"]=$kh[2];
			$_SESSION["email"]=$kh[5];
			if(isset($_POST["checkluu"]))
			echo"<script>window.location='index.php?luu=1';</script>";
			else
			echo"<script>window.location='index.php';</script>";
		}
	}
	echo"<script>alert('Bạn đăng nhập không đúng tên hoặc mật khẩu !')</script>";
}
?>
 <table width="100%" border="0" cellpadding="0" cellspacing="2">
      <form id="form1" name="form1" method="post" action="index.php">
	  <tr>
        <td colspan="2"><div align="center" class="style5">          Đăng nhập</div></td>
        </tr>
      <tr>
        <td width="46%"><p class="style10">Tên đăng nhập: </p></td>
        <td width="54%"><span class="style10">
          <label>
            <input name="ten_dn" type="text" id="ten_dn" size="15" />
            </label>
        </span> </td>
      </tr>
      <tr>
        <td><p class="style10">Mật khẩu: </p></td>
        <td><span class="style10">
          <label>
            <input name="mat_khau" type="password" id="mat_khau" size="15" />
            </label>
            <br />  
            <input type="checkbox" name="checkluu" id="chkluu" />
          <label for="checkluu"></label>
        Lưu lại mật khẩu
        </span></td>
      </tr>
      
        <td colspan="2"><div align="center">
          <label>
          <input type="submit" name="DangNhap" value="Đăng nhập" />
          </label>
        </div></td>
        </tr>
	</form>
    </table>