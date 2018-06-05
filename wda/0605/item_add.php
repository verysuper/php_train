<?php require_once('Connections/YA.php'); ?>
<?php
$tt = strtotime("+6hour");
$tt2 = date("Y-m-d H:i:s",$tt);

if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
$pic_name= $_FILES["item_pic"]["name"];			//定義圖片名稱
$pic_url =  $_FILES["item_pic"]["tmp_name"];	//定義圖片路徑
  $insertSQL = sprintf("INSERT INTO my_item (m_i_name, m_i_cont, m_i_sell, m_i_v, m_i_pic) VALUES (%s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['m_i_name'], "text"),
                       GetSQLValueString($_POST['m_i_cont'], "text"),
                       GetSQLValueString($_POST['m_i_sell'], "int"),
                       GetSQLValueString($_POST['select'], "int"),
                       GetSQLValueString($pic_name, "text"));//調整修改

  mysql_select_db($database_YA, $YA);
  $Result1 = mysql_query($insertSQL, $YA) or die(mysql_error());
copy($pic_url,$pic_name);						//上傳圖檔
  $insertGoTo = "item_list.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

mysql_select_db($database_YA, $YA);
$query_Recordset1 = "SELECT * FROM vendor";
$Recordset1 = mysql_query($query_Recordset1, $YA) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<form action="<?php echo $editFormAction; ?>" method="POST" enctype="multipart/form-data" name="form1" id="form1">
<table width="1024" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center">產品名稱</td>
    <td align="center">
      <input type="text" name="m_i_name" id="m_i_name" />
    </td>
  </tr>
  <tr>
    <td align="center">產品介紹</td>
    <td align="center">
      <input type="text" name="m_i_cont" id="m_i_cont" />
    </td>
  </tr>
  <tr>
    <td align="center">產品廠商</td>
    <td align="center">
        <select name="select" id="select">
<?php do { ?>
	<option value="<?php echo $row_Recordset1['v_seq']; ?>"><?php echo $row_Recordset1['v_name']; ?></option>
<?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
        </select>
	</td>
  </tr>
  <tr>
    <td align="center">產品圖片</td>
    <td align="center">
      <input type="file" name="item_pic" id="item_pic" />      
    </td>
  </tr>
  <tr>
    <td align="center">產品單價</td>
    <td align="center">
      <input type="text" name="m_i_sell" id="m_i_sell" />
    </td>
  </tr>
  <tr>
    <td colspan="2" align="center">
    	<input type="submit" name="button" id="button" value="送出" />
    </td>
  </tr>
</table>
<input type="hidden" name="MM_insert" value="form1" />

</form>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
