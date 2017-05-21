<?php
session_cache_limiter( FALSE );
include('lock.php');
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ადმინის გვერდი</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table width="455" border="0" align="center">
  <tr>
    <td width="449" height="71"><div align="center" class="lesson_name">მოგესალმები ადმინი</div></td>
  </tr>
  <tr>
    <td height="110">
      <div align="center" class="view_title">
      <p> აირჩიეთ დასამატებელი კატეგორია&nbsp;&nbsp;
        <br>
        <br>
        <br>
      </p>
      </div>
      <table width="492" height="216" border="0" align="center" style="color:#333333;">
  <tr>
    <td width="123" height="94" align="center">
    <img src="admin image/about.png"><br />
    <a href="view_about.php">ჩვენს შესახებ</a>
    </td>
    <td width="116" align="center" >
    <img src="admin image/service_manager.png"><br />
    <a href="view_service.php">სერვისი</a>
    </td>
    <td width="121" align="center" >
    <img src="admin image/contact.png"><br />
    <a href="view_contact.php">კონტაქტი</a>
    </td>
    <td width="114" >&nbsp;</td>
  </tr>
  <tr>
    <td align="center" >
    <img src="admin image/box.png"><br />
    <a href="view_product.php">პროდუქცია</a>
    </td>
    <td align="center">
    <img src="admin image/category.png"><br />
    <a href="view_cat.php">კატეგორია</a>
    </td>
    <td align="center">
    <img src="admin image/picture.png"><br />
    <a href="view_banner.php">ლოგო</a>
    </td>
    <td align="center">
    <img src="admin image/slide_show.png"><br />
    <a href="view_slide.php">სლაიდი</a>
    </td>
  </tr>
</table>

    </td>
  </tr>
  <tr>
  <td align="center"><a href="logout.php" title="გამოსვლა"><img src="admin image/shut_down.png"/></a></td>
  </tr>
</table>
</body>
</html>