
<?php
  if (empty($_POST['my_id'])):
?>
<form action=<?php echo $_SERVER['PHP_SELF'];// 將表單內容送給自己
   ?> method="post">
<table width="1024" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="368" align="center" valign="middle">帳號</td>
    <td width="650" align="center" valign="middle">
      <input type="text" name="my_id"/>
    </td>
  </tr>
  <tr>
    <td align="center" valign="middle">密碼</td>
    <td align="center" valign="middle">
      <input type="password" name="my_password"/>
    </td>
  </tr>
  <tr>
    <td align="center" valign="middle">單位</td>
    <td align="center" valign="middle">
      <select name="my_unit">
        <option value="1">客服</option>
        <option value="2">營運</option>
        <option value="3">開發部</option>
        <option value="4">系統部</option>
      </select>
    </td>
  </tr>
  <tr>
    <td align="center" valign="middle">權限</td>
    <td align="center" valign="middle">
      <input type="checkbox" name="my_level[]" value="a">帳號控制、
      <input type="checkbox" name="my_level[]" value="b">最新消息控制、
      <input type="checkbox" name="my_level[]" value="c">圖片控制、
      <input type="checkbox" name="my_level[]" value="d">停權控制
    </td>
  </tr>
  <tr>
    <td colspan="2" align="center" valign="middle">
      <input type="submit" value="送出" />
      <input type="reset" value="重設" />
    </td>
  </tr>
</table>
</form>

<?php
  else:
    try{
      include_once("head.php");
      $id=htmlspecialchars(strip_tags($_POST['my_id']));
  
      $sql="SELECT EXISTS (select * from account where id = '$id')";
      $stmt = $con->prepare($sql);
      $stmt->execute();
      $result = $stmt->fetch();
      if($result[0]<1)
      {
        //$pw = md5($_POST["my_password"]); //md5
        //$unit= $_POST["my_unit"];
        $a1=0;
        $a2=0;
        $a3=0;
        $a4=0;
        foreach($_POST["my_level"] as $a){
          if($a=='a')$a1=1;
          if($a=='b')$a2=1;
          if($a=='c')$a3=1;
          if($a=='d')$a4=1;
        }
        //echo "{$id},{$pw},{$unit},{$a1},{$a2},{$a3},{$a4}";
        $sql = "INSERT INTO account
                          SET seq='NULL', id=:id, pw=:pw, unit=:unit,
                           a={$a1}, b={$a2}, c={$a3}, d={$a4}";
        $stmt = $con->prepare($sql);
        
        $pw=md5(htmlspecialchars(strip_tags($_POST['my_password'])));
        $unit=htmlspecialchars(strip_tags($_POST['my_unit']));
        echo $sql;
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':pw', $pw);
        $stmt->bindParam(':unit', $unit);

        $stmt->execute();
      }
      else
      {
        echo "帳號已存在";
      }
    }
    catch(PDOException $exception){
      die('ERROR: ' . $exception->getMessage());
    }
  exit;
  endif
?>