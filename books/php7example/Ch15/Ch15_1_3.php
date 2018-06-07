<?php
include("MobileDetect.inc");
// 偵測裝置是否是Mobile
if (mobile_detect())
   header("Location: mobile/index.php");
else
   header("Location: desktop/index.php");
?>