<?php require_once('Connections/YA.php'); ?>
<?php
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

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE vendor SET v_name=%s, v_con=%s WHERE v_seq=%s",
                       GetSQLValueString($_POST['xxx'], "text"),
                       GetSQLValueString($_POST['ooo'], "text"),
                       GetSQLValueString($_POST['aaa'], "int"));

  mysql_select_db($database_YA, $YA);
  $Result1 = mysql_query($updateSQL, $YA) or die(mysql_error());

  $updateGoTo = "index.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$colname_cc = "-1";
if (isset($_GET['qqq'])) {
  $colname_cc = $_GET['qqq'];
}
mysql_select_db($database_YA, $YA);
$query_cc = sprintf("SELECT * FROM vendor WHERE v_seq = %s", GetSQLValueString($colname_cc, "int"));
$cc = mysql_query($query_cc, $YA) or die(mysql_error());
$row_cc = mysql_fetch_assoc($cc);
$totalRows_cc = mysql_num_rows($cc);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改</title>
</head>

<body>
<form action="<?php echo $editFormAction; ?>" id="form1" name="form1" method="POST">
  <table width="1024" border="1" align="center" cellpadding="10" cellspacing="0">
    <tr>
      <td align="center">廠商名稱</td>
      <td align="center"><label for="xxx"></label>
      <input name="xxx" type="text" id="xxx" value="<?php echo $row_cc['v_name']; ?>" size="0100" /></td>
    </tr>
    <tr>
      <td align="center">廠商介紹</td>
      <td align="center"><label for="ooo"></label>
      <textarea name="ooo" cols="100" rows="5" id="ooo"><?php echo $row_cc['v_con']; ?></textarea></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="button" id="button" value="送出" /></td>
    </tr>
  </table>
  <input name="aaa" type="hidden" id="aaa" value="<?php echo $row_cc['v_seq']; ?>" />
  <input type="hidden" name="MM_update" value="form1" />
</form>
</body>
</html>
<?php
mysql_free_result($cc);
?>
