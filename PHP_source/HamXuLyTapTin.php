<?php
// Ghi một file 
function GhiFile($TenFile, $NoiDung)
{
	$File=fopen($TenFile,"w");
	fwrite($File,$NoiDung);
	fclose($File);
}

// Đọc vào một file
function DocFile($TenFile, &$kq)
{
	$File=fopen($TenFile,"r") or exit("Không mở được file!");
	while(!feof($File)){
		$kq.=fgets($File)."<br/>";
	}
	fclose($File);
}

// Ghi thêm vào file đã tạo
function GhiThem($TenFile, $NoiDung)
{
	$File=fopen($TenFile,"a");
	fwrite($File,$NoiDung);
	fclose($File);
}

// Đọc một file có cấu trúc ra bảng
function DocRaBang($TenFile, $kq)
{
	DocFile($TenFile, $kq);
	$MangTheoDong=explode("/*",$kq);
	for($i=1;$i<count($MangTheoDong);$i++)
	$bang[$i-1]=explode("|",$MangTheoDong[$i]);
	return $bang;
}

// Đọc file hoa có mã số ra bảng
function DocRaBangHoa($TenFile, $kq)
{
	DocFile($TenFile, $kq);
	$MangTheoDong=explode("/*",$kq);
	for($i=1;$i<count($MangTheoDong);$i++){
	$dong=explode("|",$MangTheoDong[$i]);
	$bang[$dong[0]] = $dong;
	}
	return $bang;
}

// Đọc vào danh sách thư mục
function DocDanhSachThuMuc($TenThuMucGoc)
{
	$ThuMuc = opendir($TenThuMucGoc);
	$DanhSachThuMuc=array();
	$vt=0;
	while(($tm=readdir($ThuMuc))!==false)
	{
		if(strpos($tm,".")===false)
		{
		$DanhSachThuMuc[$vt]=$tm;
		$vt++;
		}
	}
 return $DanhSachThuMuc;
}

// Đọc vào danh sách tập tin
function DocDanhSachTapTin($TenThuMucGoc)
{
	$ThuMuc = opendir($TenThuMucGoc);
	$DanhSachTapTin=array();
	$vt=0;
	while(($tt=readdir($ThuMuc))!==false)
	{
		if($tt!="." && $tt!="..")
		{
		if(strpos($tt,".jpg")!==false)
			{
			$DanhSachTapTin[$vt]=$tt;
			$vt++;
			}
		}
	}
 return $DanhSachTapTin;
}
?>