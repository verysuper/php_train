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

$currentPage = $_SERVER["PHP_SELF"];

$maxRows_xOx = 3;
$pageNum_xOx = 0;
if (isset($_GET['pageNum_xOx'])) {
  $pageNum_xOx = $_GET['pageNum_xOx'];
}
$startRow_xOx = $pageNum_xOx * $maxRows_xOx;

mysql_select_db($database_YA, $YA);
$query_xOx = "SELECT * FROM vendor";
$query_limit_xOx = sprintf("%s LIMIT %d, %d", $query_xOx, $startRow_xOx, $maxRows_xOx);
$xOx = mysql_query($query_limit_xOx, $YA) or die(mysql_error());
$row_xOx = mysql_fetch_assoc($xOx);

if (isset($_GET['totalRows_xOx'])) {
  $totalRows_xOx = $_GET['totalRows_xOx'];
} else {
  $all_xOx = mysql_query($query_xOx);
  $totalRows_xOx = mysql_num_rows($all_xOx);
}
$totalPages_xOx = ceil($totalRows_xOx/$maxRows_xOx)-1;

$queryString_xOx = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_xOx") == false && 
        stristr($param, "totalRows_xOx") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_xOx = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_xOx = sprintf("&totalRows_xOx=%d%s", $totalRows_xOx, $queryString_xOx);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADMIN</title>
</head>

<body>
<table width="1024" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center">廠商名稱</td>
    <td align="center">廠商介紹</td>
    <td align="center">操作</td>
  </tr>
  <?php do { ?>
      <tr>
        <td align="center"><?php echo $row_xOx['v_name']; ?></td>
        <td align="center"><?php echo $row_xOx['v_con']; ?></td>
        <td align="center"><a href="dd.php?fff=<?php echo $row_xOx['v_seq']; ?>">刪除</a> <a href="update.php?qqq=<?php echo $row_xOx['v_seq']; ?>">修改</a></td>
      </tr>
  <?php } while ($row_xOx = mysql_fetch_assoc($xOx)); ?>
  <tr>
    <td colspan="3" align="center">&nbsp;
      <table border="0">
        <tr>
          <td><?php if ($pageNum_xOx > 0) { // Show if not first page ?>
              <a href="<?php printf("%s?pageNum_xOx=%d%s", $currentPage, 0, $queryString_xOx); ?>"><img src="First.gif" /></a>
              <?php } // Show if not first page ?></td>
          <td><?php if ($pageNum_xOx > 0) { // Show if not first page ?>
              <a href="<?php printf("%s?pageNum_xOx=%d%s", $currentPage, max(0, $pageNum_xOx - 1), $queryString_xOx); ?>"><img src="Previous.gif" /></a>
              <?php } // Show if not first page ?></td>
          <td><?php if ($pageNum_xOx < $totalPages_xOx) { // Show if not last page ?>
              <a href="<?php printf("%s?pageNum_xOx=%d%s", $currentPage, min($totalPages_xOx, $pageNum_xOx + 1), $queryString_xOx); ?>"><img src="Next.gif" /></a>
              <?php } // Show if not last page ?></td>
          <td><?php if ($pageNum_xOx < $totalPages_xOx) { // Show if not last page ?>
              <a href="<?php printf("%s?pageNum_xOx=%d%s", $currentPage, $totalPages_xOx, $queryString_xOx); ?>"><img src="Last.gif" /></a>
              <?php } // Show if not last page ?></td>
        </tr>
    </table>
記錄 <?php echo ($startRow_xOx + 1) ?> 到 <?php echo min($startRow_xOx + $maxRows_xOx, $totalRows_xOx) ?> 共 <?php echo $totalRows_xOx ?></td>
  </tr>
</table>
</body>
</html>
<?php
mysql_free_result($xOx);
?>
