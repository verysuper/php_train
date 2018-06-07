<?php
function mobile_detect() {
   $mobile_device_list = '/(alcatel|amoi|android|avantgo|blackberry
       |benq|cell|cricket|docomo|elaine|htc|iemobile|iphone|ipad|ipaq|ipod
       |j2me|java|midp|mini|mmp|mobi|motorola|nokia|palm|panasonic
       |philips|phone|sagem|sharp|smartphone|sony|symbian|t-mobile
       |telus|vodafone|wap|webos|wireless|xda|xoom|zte)/i';
   if (preg_match($mobile_device_list, $_SERVER['HTTP_USER_AGENT'])) 
      return true;
   else
      return false;
}
?>