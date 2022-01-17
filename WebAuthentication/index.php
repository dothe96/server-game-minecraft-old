<?php error_reporting(0);
 ?>
<!doctype html>

<!--[if gt IE 8]><!--> <html lang="vi" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#" class="no-js"><!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="content-language" content="vi" />
	<link rel="stylesheet" href="style.css">
<title>Trang Chủ - Server Minecraft Việt Nam - Minelg.com</title>
<style type='text/css'>img#wpstats{display:none}</style>
<style type="text/css">
#cssload {background:url(loader1.gif) no-repeat center;background-color:#66CEFF;width:100%;height:100%;position:fixed;left:0;top:0;z-index:1000;}
    </style>
 <style type="text/css" id="custom-background-css">
body.custom-background { background-image: url('../imglg/bglg.jpg'); background-repeat: no-repeat; background-position: top center; background-attachment: fixed; }
</style>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		</head>
			<body style="margin: 0;">
			<script type="text/javascript">
var year=2017;//năm
var month=4;//tháng
var day=01;//ngày
var h=23;//giờ
var i=59;//phút
var s=59;//giây
dateFuture1 = new Date(year,month,day,h,i,s);
function GetCount(ddate,iid){

dateNow = new Date(); //grab current date
amount = ddate.getTime() - dateNow.getTime(); //calc milliseconds between dates
delete dateNow;

// if time is already past
if(amount < 0){
document.getElementById(iid).innerHTML="Thời gian xác thực đã kết thúc!";
}
// else date is still good
else{
days=0;hours=0;mins=0;secs=0;out="";

amount = Math.floor(amount/1000);//kill the "milliseconds" so just secs

days=Math.floor(amount/86400);//days
amount=amount%86400;

hours=Math.floor(amount/3600);//hours
amount=amount%3600;

mins=Math.floor(amount/60);//minutes
amount=amount%60;

secs=Math.floor(amount);//seconds
out += (days<=9?'0':'')+days +" "+((days==1)?"Ngày":"Ngày")+", ";
out += (hours<=9?'0':'')+hours +" "+((hours==1)?"Giờ":"Giờ")+", ";
out += (mins<=9?'0':'')+mins +" "+((mins==1)?"Phút":"Phút")+", ";
out += (secs<=9?'0':'')+secs +" "+((secs==1)?"Giây":"Giây")+", ";
out = out.substr(0,out.length-2);
document.getElementById(iid).innerHTML=out;

setTimeout(function(){GetCount(ddate,iid)}, 1000);
}
}

window.onload=function(){
GetCount(dateFuture1, 'countbox1');
//you can add additional countdowns here (just make sure you create dateFuture2 and countbox2 etc for each)
};
</script>
		
					<script type='text/javascript'>
						var Nanobar=function(){var a,b,c,d,e,f,g={width:"100%",height:"2px",zIndex:9999,top:"0"},h={width:0,height:"100%",clear:"both",transition:"height .3s"};return a=function(a,b){for(var c in b)a.style[c]=b[c];a.style["float"]="left"},d=function(){var a=this,b=this.width-this.here;.1>b&&-.1<b?(e.call(this,this.here),this.moving=!1,100==this.width&&(this.el.style.height=0,setTimeout(function(){a.cont.el.removeChild(a.el)},100))):(e.call(this,this.width-b/4),setTimeout(function(){a.go()},16))},e=function(a){this.width=a,this.el.style.width=this.width+"%"},f=function(){var a=new b(this);this.bars.unshift(a)},b=function(b){this.el=document.createElement("div"),this.el.style.backgroundColor="red",this.here=this.width=0,this.moving=!1,this.cont=b,a(this.el,h),b.el.appendChild(this.el)},b.prototype.go=function(a){a?(this.here=a,this.moving||(this.moving=!0,d.call(this))):this.moving&&d.call(this)},c=function(b){b=this.opts=b||{};var c;b.bg=b.bg||"#2980B9",this.bars=[],c=this.el=document.createElement("div"),a(this.el,g),b.id&&(c.id=b.id),c.style.position=b.target?"relative":"fixed",b.target?b.target.insertBefore(c,b.target.firstChild):document.getElementsByTagName("body")[0].appendChild(c),f.call(this)},c.prototype.go=function(a){this.bars[0].go(a),100==a&&f.call(this)},c}(),nanobar=new Nanobar;nanobar.go(30),nanobar.go(60),nanobar.go(100);
					</script>
					<div class="container">
						<header>
							<div class="header">
							<div class="canle">
							<div class="logo"><a href="https://minelg.com"><img class="logodidong" src="logo3.png"/></a></div>
							<div class="ts2"> Xác Thực Tài Khoản</div>
							</div>
							</div>
						</header>
						<div class="canle">
						<div class="fence"></div>
							<div class="bodyct">
								<form method="post" enctype="multipart/form-data">
								  <h1><center>Bảo lưu tài khoản sau Big Update</center>
								  </h1>
<p style="font-size: 17px; width: 500px; text-align: center; margin: auto; background: #33ca45; color: #fff; border-radius: 20px; box-shadow: inset 0 0 8px 0 #b49e42; font-weight: bold;">								  
<?php	$conn = mysql_connect("localhost", "root", "");//kết nối MySQL server Minelg
		mysql_select_db("minecraft", $conn);//Bảng Đăng Ký
		if(! $conn )
   			{
      			die('Hệ thống lỗi. Vui lòng thử lại sau!');				#Code by Đỗ Thế Administrator minelg
   			}
?>
<?php
 	//lấy IP người dùng
	$ip = $_SERVER['REMOTE_ADDR'];
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    ?>
 <?php 	if (isset($_POST['reg_submit'])){
 		$tentk = $_POST['reg_username'];
		if (mysql_num_rows(mysql_query("SELECT realname FROM thongtin WHERE realname='$tentk'")) > 0){
				if (mysql_num_rows(mysql_query("SELECT username FROM thanhvien WHERE username='$tentk'")) > 0){
						echo "Lỗi: Tài khoản đã xác thực!";
				}
				else{
					$matkhau = mysql_fetch_array(mysql_query("SELECT * FROM thongtin WHERE realname='$tentk'"));
					$salt = substr( $matkhau['password'],  5, 16);
					$mkinput = $_POST['reg_password'];
					$mkss = '$SHA$' . $salt . '$' . hash('sha256', hash('sha256', $mkinput) . $salt);
					if($mkss==$matkhau['password']){
							#kiểm tra ký tự email
							if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $_POST['reg_email']))
								{
										echo "Lỗi: Email không hợp lệ. Vui lòng nhập lại!";
								}
							else{
								$ktemail = $_POST['reg_email'];
								if (mysql_num_rows(mysql_query("SELECT email FROM thanhvien WHERE email='$ktemail'")) > 0){
								echo "Lỗi: Email đã tồn tại!";
								}
								else{
									$mahoamk = md5($_POST['reg_password']);
									@$addmember = mysql_query("
							        INSERT INTO thanhvien (
							            username,
							            realname,
							            password,
							            email,
							            ip
							        )
							        VALUE (
							            '{$_POST['reg_username']}',
							            '{$matkhau['realname']}',
							            '{$mahoamk}',
							            '{$_POST['reg_email']}',
							            '{$ip}'
							        )
							    ");
									@$addmember2 = mysql_query("
							        INSERT INTO chuamahoatk (
							            taikhoan,
							            matkhau
							        )
							        VALUE (
							            '{$matkhau['realname']}',
							            '{$mkinput}'
							        )
							    ");
							                          
							    //Thông báo quá trình lưu
							    if ($addmember)
							        echo "Xác thực thành công!";
							    else
							        echo "Lỗi hệ thống. Thử lại sau!";
								}
							}	
					}
					else{
						echo "Lỗi: mật khẩu không đúng!";
					}

				}
			}
		else{
				echo "Lỗi: Tài khoản sai hoặc không tồn tại!";
		}
	}
  ?>
 </p>
								  <div class="tt">
								  <div class="dn">Xác Thực Tài Khoản</div>
								  <input name="reg_username" placeholder="Nhập Tài Khoản" type="text" required="required">
								  <input name="reg_password" placeholder="Nhập Mật Khẩu" type="password" required="required">
								  <input name="reg_email" placeholder="Nhập Email (Email mới cho tài khoản)" type="email" required="required">
								  <input type="submit" name="reg_submit" title="" value="Xác Nhận" class="sm">
								  <div class="thoigian1">Thời hạn xác thực (1/5/2017):</div>
								  <div class="thoigian"><div id="countbox1"></div></div>
								  </div>
								  <div class="tt2"><h4>Đây là gì?</h4>
								  <h3>Để chuẩn bị cho Big Update tất cả tài khoản cần xác thực để bảo lưu. <font color="red">Tất cả tài khoản không xác thực đều bị xóa!</font></h3>
								  <h4>Quyền lợi</h4>
								  <h3>
								  		<li>Tài khoản Donate được hoàn lại coin x2 (VD: tổng nạp 100k hoàn lại 200 coin)</li>
								  		<li>Event Big Update với những item giá trị</li>
								  </h3>
								  <h4>Big Update?</h4>
								  <h3><li>Big Update làm mới lại server. Update thêm <font color="#bc1a65">Prison, Skyblock...</font></li></font></h3>
								  <h3><li>Thay đổi META survival: Nhằm đổi mới lối trang bị nhàm chán, Server Update tính năng tự build đồ cho người chơi tùy ý sáng tạo bằng cách khảm trang bị.</li></h3>
								  <h3><li>Và còn rất nhiều những thay đổi thú vị...</li></h3>
								  <div class="spac"></div>
								  </div>
								  <div class="tt3"></div>
								</form>
							</div>
							
						</div>
					</div>
			</body>
			<footer>
					<div class="ff">Mọi thắc mắc liên hệ Facebook: <a href="https://facebook.com/groups/minelg">Minelg Group</a> hoặc Email: <a href="http://google.com/mail">hotro.minelg@gmail.com</a></div>
								<div class="ff">© 2016 Minecraft Việt Nam - Minecraft legend</div>
			</footer>

</html>