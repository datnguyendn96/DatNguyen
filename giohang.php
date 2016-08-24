 <?php
    require 'mail/mail.php';
    $from ="datnqpd01235@fpt.edu.vn";
    $to ="datnguyen.dnn96@gmail.com";
    $subject ="test mail";
    $body ="Đây là nội dung";
    
    $host ="ssl://smtp.gmail.com";
    $port ="465";
    $username= "datnqpd01235@fpt.edu.vn";
    $password="datnguyendn1996";
    
    $headers = array('From'=>$from,'To'=>$to,'Subject'=>$subject);
    $smtp = Mail::factory('smtp',array(
        'host'=>$host,
        'port'=>$port,
        'auth'=>true,
        'username'=>$username,
        'password'=>$password,
    ));
    $smtp =$smtp ->send($to,$headers,$body);
    if(PEAR::isError($mail)){
        echo $mail->getmessage();
    }else{
        echo"thanh cong";
    }
    ?>

<!DOCTYPE html PUBLIC>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Smartworld.com</title>
<link rel="shortcut icon" href="images/logo_2.jpg">

<link href="css/menu.css" rel="stylesheet" type="text/css">
<link href="css/giohang.css" rel="stylesheet" type="text/css">
<link href="css/reset.css" rel="stylesheet" type="text/css">
<script src="js/index.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
</head>

<body>
<div class="header">
    <div class="logo"> <a href="index.php"><img src="images/logo_1.jpg"></a>
</div>
<table id="tab1" width="262" border="" style="margin-top:20px; float:left; margin-right:30px">
  <tr>
    <td width="22" height="30" ><img src="images/Search.png" width="26" height="32"></td>
    <td width="146"><input class="seach"type="text" name="seach" placeholder="Ban muon tim gi?"></td>
    <td width="72">
    <input class="find" type="button" name="find" value="Tìm Kiếm">
    </td>
  </tr>
</table>
<img style="float:left; margin-top:5px; margin-right:150px" src="images/tuvan.png">
<table width="190" border="0" style=" margin-top:15px; float:left">
  <tr>
    <td width="86"><input style="border:none; padding:10px" type="button" name="login" value="Đăng Nhập"></td>
    <td width="94"><input style="border:none; padding:10px" type="button" name="register" value="Đăng Ký"></td>
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
<div id="top">
<h3 style="margin-bottom:20px; margin-top:20px; font-size:22px; color:#333">GIỎ HÀNG - ĐẶT HÀNG TRỰC TUYẾN</h3>
</div>
<div class="main-content">

<div id="content_1">
<table width="100%" height="125" border="1" cellspacing="1" cellpadding="5" style="border:solid 1px #CCC;  text-align:center">
  <tr style="border:solid 1px #CCC">
    <td width="21%"><p>&nbsp;</p>
      <p>Hình Ảnh</p></td>
    <td width="27%"><p>&nbsp;</p>
      <p>Tên Sản Phẩm</p></td>
    <td width="15%"><p>
            &nbsp;
        </p>
      <p>Đơn Giá</p></td>
    <td width="12%"><p>&nbsp;</p>
      <p>Số Lượng</p></td>
    <td width="18%"><p>&nbsp;</p>
      <p>Thành Tiền</p></td>
    <td width="7%"><p>&nbsp;</p>
      <p>Xóa</p></td>
  </tr>
  <tr>
    <td><p>&nbsp;</p>
      <p>&nbsp;</p></td>
    <td><p>&nbsp;</p>
      <p><?php
$ketnoi=mysql_connect('localhost','root','');
mysql_select_db('gio_hang',$ketnoi);
$sql ="select * from san_pham order by id desc";
mysql_query('SET NAME UTF8',$ketnoi);
$query=mysql_query($sql);
if(mysql_num_rows($query)>0)
{
    while($row=mysql_fetch_array($query))
    {
        echo "<h1>$row[ten_sanpham]</h1><p>&nbsp;</p>";
        
    }
}
?><p>&nbsp;</p></p></td>
    <td><p>&nbsp;</p>
      <p>
      <?php
$ketnoi=mysql_connect('localhost','root','');
mysql_select_db('gio_hang',$ketnoi);
$sql ="select * from san_pham order by id desc";
mysql_query('SET NAME UTF8',$ketnoi);
$query=mysql_query($sql);
if(mysql_num_rows($query)>0)
{
    while($row=mysql_fetch_array($query))
    {
        
        echo "<p> $row[don_gia]</p><p>&nbsp;</p>";
        
    }
}
?><p>&nbsp;</p></p></td>
    <td><p>&nbsp;</p>
    <p><?php
$ketnoi=mysql_connect('localhost','root','');
mysql_select_db('gio_hang',$ketnoi);
$sql ="select * from san_pham order by id desc";
mysql_query('SET NAME UTF8',$ketnoi);
$query=mysql_query($sql);
if(mysql_num_rows($query)>0)
{
    while($row=mysql_fetch_array($query))
    {
        
        echo "<p>$row[so_luong]</p><p>&nbsp;</p>";
        
    }
}
?><p>&nbsp;</p>
    </p>
    </td>
    <td><p>&nbsp;</p>
      <p><?php
$ketnoi=mysql_connect('localhost','root','');
mysql_select_db('gio_hang',$ketnoi);
$sql ="select * from san_pham order by id desc";
mysql_query('SET NAME UTF8',$ketnoi);
$query=mysql_query($sql);
if(mysql_num_rows($query)>0)
{
    while($row=mysql_fetch_array($query))
    {
        
        echo "<p>$row[thanh_tien]</p><p>&nbsp;</p>";
        
    }
}
?></p></td>
    <td>&nbsp;</td>
  </tr>
  <tr style="border:solid 1px #CCC">
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><p>&nbsp;</p>
      <p>Tổng Cộng</p></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><p>&nbsp;</p>
      <p>0 VND</p></td>
  </tr>
</table>
<h3 style="margin-bottom:20px; margin-top:20px; font-size:22px; color:#333">Thông Tin Đặt Hàng</h3>
<table style="float:left; margin-right:20px" width="549" height="362" border="1" cellspacing="1">
  <tr>
    <td width="493" height="41"><input id="name" type="text" placeholder="Họ Và Tên" name="name" required ></td>
  </tr>
  <tr>
    <td height="39"><input id="email" type="email" placeholder="Email" name="email" required ></td>
  </tr>
  <tr>
    <td height="41"><input id="address" type="text" placeholder="Địa Chỉ" name="address" required ></td>
  </tr>
  <tr>
    <td height="40"><input id="phone" type="tel" placeholder="Số Điện Thoại" required ></td>
  </tr>
  <tr>
    <td height="136"><textarea cols="80" rows="8" required id="ghichu" placeholder="Ghi Chú"></textarea></td>
  </tr>
  <tr>
    <td><input style="background-color:#930; color:#FFF; padding:15px" type="submit" value="GỞI ĐƠN ĐẶT HÀNG" required></td>
  </tr>
</table>

<p style="font-size:14px">Cách thức mua hàng trực tuyến:</p><br>

<p style="line-height:2.0; font-size:14px">
1. Khách hàng chọn sản phẩm, điền đầy đủ thông tin đặt hàng rồi gởi cho Phi Long.<br>
2. Phi Long sẽ liên hệ với quý khách trong thời gian sớm nhất để xác nhận thông tin đặt hàng.<br>
3. Nhân viên của Phi Long sẽ giao hàng đến tận nơi và nhận thanh toán khi giao hàng.<br>
Lưu ý: Phi Long chỉ chấp nhận những đơn đặt hàng cung cấp thông tin chính xác về địa chỉ, số điện thoại, email. Phi Long cam kết tất cả hàng hóa gởi đến quý khách đều là hàng mới 100%.</p>
<img  style="margin-top:20px"src="images/301.png" width="610">
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
