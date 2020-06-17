<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documentation | Tranqueel Softwares</title>
<link rel="icon" href="../ts-favicon.png<?php echo "?t=".time()?>" />
<link rel="stylesheet" href="doc-style.css">
<script language="JavaScript" src="doc-js.js" type="text/javascript" xml:space="preserve"></script>
<script language="JavaScript" src="gen_validatorv4/gen_validatorv4.js" type="text/javascript" xml:space="preserve"></script>
</head>
<body>
<div class="container_div">
  <ul style="list-style-type:none;">
    <li id="ts_class_li" class="active" onclick="showDiv('ts_class')">TS Class</li>
    <li id="mysqli_li" onclick="showDiv('mysqli')">MySQLi</li>
    <li id="input_li" onclick="showDiv('input')">Input</li>
    <li id="validation_li" onclick="showDiv('validation')">Validation</li>
    <li id="sms_li" onclick="showDiv('sms')">SMS</li>
  </ul>
  <br />
  <br />
  <?php
  // ts_class div
  include("div-ts_class.php");
  // mysqli div
  include("div-mysqli.php");
  // input div
  include("div-input.php");
  // validation div
  include("div-validation.php");
  // sms div
  include("div-sms.php");
  ?>
</div>
</body>
</html>