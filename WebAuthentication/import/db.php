<?php 

$conn = mysql_connect("localhost", "root", "");//kết nối MySQL server Minelg
		mysql_select_db("minecraft", $conn);//Bảng Đăng Ký
		if(! $conn )
   			{
      			die('Hệ thống lỗi. Vui lòng đăng ký lại sau!');				#Code by Đỗ Thế Administrator minelg
   			}

?>