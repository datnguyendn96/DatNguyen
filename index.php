
<?php
mysql_connect('localhost','root','');
mysql_select_db('dangnhap');
?>
<?php
session_start();
if (isset($_SESSION['username'])) {
    echo "Xin Chào ".$_SESSION['username'];
}
    else {
        
    
if(isset($_POST['submit'])){
$sql= mysql_query('SELECT * FROM user where username="'.$_POST['user'].'" and password="'.$_POST['pass'].'"');
    if(mysql_num_rows($sql)>0) {
        echo "Bạn Đã Đăng Nhập Thành Công, Xin Chào " .$_POST['user'];
        $_SESSION ['username']= $_POST['user'];
    }else {
        echo "User hoặc password không đúng";
    }
}
    } 
?>
<!--Xu Ly From -->
<?php 
if(isset($_POST['dangky'])){
    if($_POST ['user_1']==NULL or $_POST['pass_1']==NULL or $_POST['pass_2']==NULL){
        echo 'email hoặc pass không được để trống';
    }  else {
        
        $red=mysql_query('SELECT * FROM user where username="'.$_POST['user_1'].'"');
        $row=mysql_num_rows($red);
        if($row>0){
            echo 'Email đã có người sữ dụng';
    }else {
        $sql=mysql_query("INSERT INTO user VALUE('','".$_POST['user_1']."','".$_POST['pass_1']."')");
        if($sql) echo' Đăng Ký Thành Công ';
        else echo 'SQL Bị Lỗi';
    }
        
        
    }
}
?>
<!--add gio hanh -->
<?php
require 'add.php';
?>
<!DOCTYPE html PUBLIC>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Smartworld.com</title>
<link rel="shortcut icon" href="images/logo_2.png">
<link href="css/index.css" rel="stylesheet" type="text/css">
<link href="css/menu.css" rel="stylesheet" type="text/css">
<link href="css/reset.css" rel="stylesheet" type="text/css">
<script src="js/index.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
</head>

<body>
<div class="header">
<div class="logo"> <a href="index.php"><img src="images/logo_1.jpg"></a>
</div>
<table width="262" border="" style="margin-top:20px; float:left; margin-right:30px">
  <tr>
    <td width="22" height="30" ><img src="images/Search.png" width="26" height="32"></td>
    <td width="146"><input class="seach"type="text" name="seach" placeholder="Ban muon tim gi?"></td>
    <td width="72">
    <input class="find" type="button" name="find" value="Tìm Kiếm">
    </td>
  </tr>
</table>
<img style="float:left; margin-top:5px; margin-right:150px" src="images/tuvan.png">
<table width="372" border="0" style=" margin-top:15px; float:left">
  <tr>
    <td width="98"><input type="button" name="login" id ="dangnhap_1" value="Đăng Nhập">
    <div id="formlogin">
        <form action="index.php" method="POST">
        <input style="border-radius:4px; margin-top:10px; height:30px; width:100%; padding-left:10px" type="text" name="user" placeholder="Email hoặc số điện thoại"><br>
        <input style="border-radius:4px; margin-top:10px; height:30px; width:100%; padding-left:10px" type="password" name="pass" placeholder="Mật Khẩu"><br>
        <input style="border:none; padding:10px; margin-top:10px; background-color:#C30; color:#FFF; margin-bottom:10px" type="submit" name="submit" value="Đăng Nhập">
     <p style="color:#09F">Quên mật khẩu ?</p>.
        </form>
    </div>
    </td>
    <td width="175"><input type="button" id="dangky_1" name="register" value="Đăng Ký">
    <div id="formdangky">
        <form action="index.php" method="POST">
            <input style="border-radius:4px; margin-top:10px; height:30px; width:100%; padding-left:10px" type="text" name="user_1" placeholder="Email của bạn"><br>
    <input style="border-radius:4px; margin-top:10px; height:30px; width:100%; padding-left:10px" type="password" name="pass_1" placeholder="Đặt Mặt Khẩu"><br>
    <input style="border-radius:4px; margin-top:10px; height:30px; width:100%; padding-left:10px" type="password" name="pass_2"placeholder="Nhập Lại Mật Khẩu"><br>
    <input style="border:none; padding:10px; margin-top:10px; background-color:#C30; color:#FFF; margin-bottom:10px" type="submit" name="dangky" value="Đăng Ký">
     <p>Bạn Đã Có Tài Khoản? <p2 style=" color:#09F">Đăng Nhập Ngay</p2></p>
        </form>
    </div>
    </td>
    <td width="85"><a href="giohang.php"><input style="border:none; padding:10px" type="button" name="register" value="Giỏ Hàng"></a>
   
    </td>
  </tr>
</table><br><br><br><br>
<div class="container">
	
<a class="toggleMenu" href="#">Menu</a>
<ul class="nav">
	<li  class="test">
		<a href="#">Điện Thoại</a>
		<ul>
			<li>
				<a href="#">Womens</a>
				<ul>
					<li><a href="#">Sandals</a></li>
					<li><a href="#">Sneakers</a></li>
					<li><a href="#">Wedges</a></li>
					<li><a href="#">Heels</a></li>
					<li><a href="#">Loafers</a></li>
					<li><a href="#">Flats</a></li>
				</ul>
			</li>
			<li>
				<a href="#">Mens</a>
				<ul>
					<li><a href="#">Loafers</a></li>
					<li><a href="#">Sneakers</a></li>
					<li><a href="#">Formal</a></li>
				</ul>
			</li>
		</ul>
	</li>
	<li>
		<a href="#">Tablet</a>
		<ul>
			<li>
				<a href="#">Mens</a>
				<ul>
					<li><a href="#">T-Shirts</a></li>
					<li><a href="#">Dress Shirts</a></li>
					<li><a href="#">Tank Tops</a></li>
				</ul>
			</li>
			<li>
				<a href="#">Womens</a>
				<ul>
					<li><a href="#">T-Shirts</a></li>
					<li><a href="#">Blouses</a></li>
					<li><a href="#">Dress Shirts</a></li>
					<li><a href="#">Tunics</a></li>
					<li><a href="#">Camisoles</a></li>
				</ul>
			</li>
		</ul>
	</li>
	<li>
		<a href="#">Laptop</a>
		<ul>
			<li>
				<a href="#">Mens</a>
				<ul>
					<li><a href="#">Trousers</a></li>
					<li><a href="#">Slacks</a></li>
					<li><a href="#">Jeans</a></li>
				</ul>
			</li>
			<li>
				<a href="#">Womens</a>
				<ul>
					<li><a href="#">Trousers</a></li>
					<li><a href="#">Slacks</a></li>
					<li><a href="#">Jeans</a></li>
					<li><a href="#">Leggings</a></li>
				</ul>
			</li>
		</ul>
	</li>
	<li>
		<a href="#">Phụ Kiện</a>
		<ul>
			<li>
				<a href="#">Long</a>
				<ul>
					<li><a href="#">Denim</a></li>
					<li><a href="#">Knits</a></li>
				</ul>
			</li>
			<li>
				<a href="#">Short</a>
				<ul>
					<li><a href="#">Denim</a></li>
					<li><a href="#">Knits</a></li>
				</ul>
			</li>
			<li>
				<a href="#">Mini</a>
				<ul>
					<li><a href="#">Denim</a></li>
					<li><a href="#">Knits</a></li>
				</ul>
			</li>
		</ul>
	</li>
	<li>
		<a href="#">Xã Hàng</a>
		<ul>
			<li>
				<a href="#">Casual</a>
			</li>
			<li>
				<a href="#">Formal</a>
				<ul>
					<li><a href="#">Wedding</a></li>
					<li><a href="#">Party</a></li>
				</ul>
			</li>
			
		</ul>
	</li>
	<li>
		<a href="#">Trả Góp</a>
		<ul>
			<li>
				<a href="#">Mens</a>
				<ul>
					<li><a href="#">Wool</a></li>
					<li><a href="#">Knitwear</a></li>
					<li><a href="#">Light Sweaters</a></li>
					<li><a href="#">Cardigans</a></li>
					<li><a href="#">Hoodies</a></li>
				</ul>
			</li>
			<li>
				<a href="#">Womens</a>
				<ul>
					<li><a href="#">Wool</a></li>
					<li><a href="#">Knitwear</a></li>
					<li><a href="#">Light Sweaters</a></li>
					<li><a href="#">Cardigans</a></li>
					<li><a href="#">Hoodies</a></li>
				</ul>
			</li>
		</ul>
	</li>
	<li>
		<a href="#">Khuyến Mãi</a>
		<ul>
			<li>
				<a href="#">Womens</a>
				<ul>
					<li><a href="#">Belts</a></li>
					<li><a href="#">Bags</a></li>
					<li><a href="#">Jewelery</a></li>
					<li><a href="#">Hats</a></li>
					<li><a href="#">Eyewear</a></li>
				</ul>
			</li>
			<li>
				<a href="#">Mens</a>
				<ul>
					<li><a href="#">Belts</a></li>
					<li><a href="#">Hats</a></li>
					<li><a href="#">Eyewear</a></li>
				</ul>
			</li>
		</ul>
	</li>
	<li>
		<a href="#">Tin Hay</a>
	</li>
</ul>
</div>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="script.js"></script>
</div>
<div class="banner">
<img src="images/1.png">
</div>
<div id="top">
<div class="top"> <p style="font-weight:bold">Top Bán Chạy Nhất</p></div>

<div class="top1">
<img src="images/iphone5s16gb_1.png">
<p style=" font-size:18px; font-weight:bold">iPhone 6s Plus 64gb</p>
<p style="font-weight:bold; color:#F00">24.699.000đ</p>
</div>
<div class="top1">
<img src="images/iphone5s16gb_1.png">
<p style=" font-size:18px; font-weight:bold">iPhone 6s Plus 64gb</p>
<p style="font-weight:bold; color:#F00">24.699.000đ</p>
</div>
<div class="top1">
<img src="images/iphone5s16gb_1.png">
<p style=" font-size:18px; font-weight:bold">iPhone 6s Plus 64gb</p>
<p style="font-weight:bold; color:#F00">24.699.000đ</p>
</div>
<div class="top1">
<img src="images/iphone5s16gb_1.png">
<p style=" font-size:18px; font-weight:bold">iPhone 6s Plus 64gb</p>
<p style="font-weight:bold; color:#F00">24.699.000đ</p>

</div>
<div class="top1">
<img src="images/iphone5s16gb_1.png">
<p style=" font-size:18px; font-weight:bold">iPhone 6s Plus 64gb</p>
<p style="font-weight:bold; color:#F00">24.699.000đ</p>

</div>
<div class="top1">
<img src="images/iphone5s16gb_1.png">
<p style=" font-size:18px; font-weight:bold">iPhone 6s Plus 64gb</p>
<p style="font-weight:bold; color:#F00">24.699.000đ</p>

</div>
</div>
<div class="main-content">

<div id="content_1">
<div class="a">
  <input style="padding:8px; margin-bottom:10px; border:none; border-radius:4px; background:#e52153; color:#FFF"type="button" value="Mua Ngay" >
<input style=" border:1px solid #e52153; background-color:#FFF; color:#e52153; border-radius:4px; padding:8px" type="button" value="Thêm vào giỏ" name="add1" >
</div>
<div class="b">
<input style="padding:8px; margin-bottom:10px; border:none; border-radius:4px; background:#e52153; color:#FFF"type="button" value="Mua Ngay" >
<input style=" border:1px solid #e52153; background-color:#FFF; color:#e52153; border-radius:4px; padding:8px" type="button" value="Thêm vào giỏ" >
</div>
<div class="c">
  <input style="padding:8px; margin-bottom:10px; border:none; border-radius:4px; background:#e52153; color:#FFF"type="button" value="Mua Ngay" >
<input style=" border:1px solid #e52153; background-color:#FFF; color:#e52153; border-radius:4px; padding:8px" type="button" value="Thêm vào giỏ" >
</div>
<div class="d">
<input style="padding:8px; margin-bottom:10px; border:none; border-radius:4px; background:#e52153; color:#FFF"type="button" value="Mua Ngay" >
<input style=" border:1px solid #e52153; background-color:#FFF; color:#e52153; border-radius:4px; padding:8px" type="button" value="Thêm vào giỏ" >
</div>
<div class="e">
  <input style="padding:8px; margin-bottom:10px; border:none; border-radius:4px; background:#e52153; color:#FFF"type="button" value="Mua Ngay" >
<input style=" border:1px solid #e52153; background-color:#FFF; color:#e52153; border-radius:4px; padding:8px" type="button" value="Thêm vào giỏ" >
</div>
<div class="f"> <a href="#"></a>
<a href="dienthoaiHonor4C.php"><input class="t1t" style="padding:8px; margin-bottom:10px; border:none; border-radius:4px; background:#e52153; color:#FFF"type="button" value="Mua Ngay" ></a>
<input class="t1t" style=" border:1px solid #e52153; background-color:#FFF; color:#e52153; border-radius:4px; padding:8px" type="button" value="Thêm vào giỏ" >
</div>
<div class="g">
  <input style="padding:8px; margin-bottom:10px; border:none; border-radius:4px; background:#e52153; color:#FFF"type="button" value="Mua Ngay" >
<input style=" border:1px solid #e52153; background-color:#FFF; color:#e52153; border-radius:4px; padding:8px" type="button" value="Thêm vào giỏ" >
</div>
<div class="h">
<input style="padding:8px; margin-bottom:10px; border:none; border-radius:4px; background:#e52153; color:#FFF"type="button" value="Mua Ngay" >
<input style=" border:1px solid #e52153; background-color:#FFF; color:#e52153; border-radius:4px; padding:8px" type="button" value="Thêm vào giỏ" >
</div>
<div class="k">
  <input style="padding:8px; margin-bottom:10px; border:none; border-radius:4px; background:#e52153; color:#FFF"type="button" value="Mua Ngay" >
<input style=" border:1px solid #e52153; background-color:#FFF; color:#e52153; border-radius:4px; padding:8px" type="button" value="Thêm vào giỏ" >
</div>
<div class="l">
<input style="padding:8px; margin-bottom:10px; border:none; border-radius:4px; background:#e52153; color:#FFF"type="button" value="Mua Ngay" >
<input style=" border:1px solid #e52153; background-color:#FFF; color:#e52153; border-radius:4px; padding:8px" type="button" value="Thêm vào giỏ" >
</div>

</div>
<div id="tintuc">
<div class="t_top">
<input style="padding:15px; background-color:#0F0; border:none;" type="button" value="TIN CÔNG NGHỆ">
</div>
<div class="tin1">
<img src="images/635832810270847408_tim-cook.jpg" width="148" height="95" style="float:left; margin-right:10px">
Tim Cook:Apple sẽ không kết hợp iPad và Mac thành một thiết bị
</div>
<div class="tin2">
<img src="images/635832251538918163_HTC-One-X9-Tenaa-07.jpg" width="148" height="95" style="float:left; margin-right:10px">
HTC One X9 lộ thiết kế với màn hình 5,5 inch, chip 8 nhân, 2GB RAM và loa BoomSound
</div>
<div class="tin3">
<img src="images/635831010713696294_Zenpad-8-Cover.jpg" width="148" height="95" style="float:left; margin-right:10px">
Mở hộp Asus Zenpad 8.0 chính hãng tại FPT Shop: Chip Qualcomm giá 6 triệu đồng
</div>
<div class="tin4">
<img src="images/635831237831989636_Sony-Xperia-Z5-dual-36.jpg" width="132" height="83" style="float:left; margin-right:10px">
Khui hộp và đánh giá nhanh Sony Xperia Z5 Dual - Máy đẹp, cảm biến vân tay siêu nhạy
</div>
<div class="tin5">
<img src="images/lg-g4-screen-300x200.jpg" width="137" height="77" style="float:left; margin-right:10px">
LG G5 sẽ có thiết kế sang trọng, hợp thời hơn?
</div>
<div class="d_2">
<input style="padding:8px; margin-bottom:10px; border:none; border-radius:4px; background:#e52153; color:#FFF"type="button" value="Mua Ngay" >
<input style=" border:1px solid #e52153; background-color:#FFF; color:#e52153; border-radius:4px; padding:8px" type="button" value="Thêm vào giỏ" >
</div>
<div class="d_1">
<input style="padding:8px; margin-bottom:10px; border:none; border-radius:4px; background:#e52153; color:#FFF"type="button" value="Mua Ngay" >
<input style=" border:1px solid #e52153; background-color:#FFF; color:#e52153; border-radius:4px; padding:8px" type="button" value="Thêm vào giỏ" >
</div>
</div>

</div>
<div id="footer">

<div class="top_footer">
<div class="t-f-1">
<p style="font-weight:bold; font-size:13px">TIN TỨC</p>
<p>Tin mới</p>
<p>Khuyến mại</p>
<p>Tuyển dụng</p>
<p>Download</p>
<p>Tags</p>
</div>
<div class="t-f-2">
<p style="font-weight:bold; font-size:13px">CHÍNH SÁCH</p>
<p>Chính sách giao hàng</p>
<p>Chính sách đổi sản phẩm</p>
<p>Chính sách bảo hành</p>
<p>Chính sách trả góp</p>
<p>Giới thiệu máy đổi trả</p>
</div>
<div class="t-f-3">
<p style="font-weight:bold; font-size:13px">DỊCH VỤ & HỖ TRỢ</p>
<p>Hệ thống cửa hàng</p>
<p>Hướng dẫn mua hàng</p>
<p>Hướng dẫn thanh toán</p>
<p>Hướng dẫn tích điểm đổi quà</p>
<p>Câu hỏi thường gặp</p>
<p>Kiểm tra hàng Apple chính hãng</p>
</div>
<div class="t-f-4">
<p style="font-weight:bold; font-size:13px">DANH MỤC VÀ NHÃN HÀNG ĐƯỢC YÊU THÍCH</p>
<p><a1 style=" font-weight:bold">Máy tính bảng:</a1> Apple, Samsung, Sony, Asus, HP, Lenovo, Xem thêm...</p>
<p><a1 style=" font-weight:bold">Điện thoại:</a1>Apple, Samsung, Sony, HTC, LG, Nokia, FPT, Asus, Q-Mobile, BlackBerry, Xem thêm...</p>
<p><a1 style=" font-weight:bold">Apple:</a1> iPhone, iPad, Xem thêm...</p>
<p><a1 style=" font-weight:bold">Máy tính xách tay:</a1>Apple (Macbook), Acer, Dell, HP, Lenovo, Toshiba, Sony, Xem thêm....</p>
<p><a1 style=" font-weight:bold">Phụ kiện:</a1>Tai nghe , Bao da và ốp lưng , Xem thêm...</p>
</div>

</div>

<div class="center_footer-1">
<div class="c-f-1">
<p>Đăng ký nhận tin khuyến mãi:</p><br>
<input style="border-radius:4px; height:30px; padding-left:10px; float:left; margin-right:15px" type="text" placeholder="Họ Tên Bạn" >
<input style="border-radius:4px; height:30px; padding-left:10px; float:left" type="email" placeholder="Email" >
<input  style="height:25px; padding-top:5px; background-color:#c90b0b; color:#FFF; height:30px; width:100px; border-radius:5px"type="submit"  value="Đăng Ký">
</div>
<div class="c-f-2">
<img style="margin-top:5px"src="images/fo.png" height="89">
</div>
</div>

<div class="center_footer-2">
<div class="c-f-3">
<p style="font-style:italic">Hỗ Trợ Thanh Toán</p>
<img src="images/101.png">
<br>
<p style="font-size:12px"><a2 style=" font-weight:bold">© 2007 - 2015 Công Ty Cổ Phần Bán Lẻ Kỹ Thuật Số Smart World Việt Nam</a2><br>
Địa chỉ: 10 Ngô Quyền, Q3, TP. Đà Nẵng.<br>
GPĐKKD số 0311609355 do Sở KHĐT TP.Đà Nẵng cấp ngày 08/03/2012.</p>
</div>
<div class="c-f-4">
<p style="font-style:italic">Chứng Nhận Giải Thường</p>
<img src="images/102.png">
<p style=" font-size:12px; color:a8a8a8">Kết nối với smart world</p>
<img src="images/103.png">
</div>
<div class="bottom_footer">
<p style="font-size:12px;color:a8a8a8; margin-top:15px">

iPhone 6s Plus | iPhone 6s | Sony Xperia Z5 Dual | Moto G |Moto X | Samsung Galaxy Tab E | Asus Zenfone Selfie | Sony Xperia Z5 compact | iPad mini 4 | Sony Xperia Z5 Premium | Sony Xperia Z5 | Sony Xperia C5 Ultra | Sony Xperia M5 | Samsung Galaxy S6 Edge Plus | Motorola Moto X 2014 | Motorola | Asus Zenpad Z170CG | Samsung Galaxy Tab S2 9.7 inch | Samsung Galaxy Tab S2 8 inch | iPhone 6S | Lenovo ThinkPad x250 | Oppo Mirror 5 | Oppo R7 Plus | Samsung Galaxy J7 | Sony Xperia Z3 Plus | Điện thoại BPhone | Máy tính bảng Dell | Điện thoại Pantech | Điện thoại Mobiistar | Samsung Galaxy Tab A 8.0 |
</p>
</div>
</div>
</div>
</body>
</html>

<script>
$(document).ready(function(){
    $("#dangnhap_1").click(function(){
        $("#formlogin").toggle();
		$("#formdangky").hide();
    });
});
$(document).ready(function(){
    $("#dangky_1").click(function(){
        $("#formdangky").toggle();
		$("#formlogin").hide();
    });
});
</script>
