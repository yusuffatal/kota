<?php

while(1){
  $ch = curl_init();

  curl_setopt($ch, CURLOPT_URL, "https://api.9jta.com/System/Invite/rewarded_video");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, "member_token=NjIwODU4MTI0NDIwNzktLXx8LS0wZjRiMjZjMDI4NWRmMTZjMGJlM2U4OGRkYzk2M2JlYQ%3D%3D&device_id=3c262f54dfc71102");
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

  $headers = array();
  $headers[] = "Host: api.9jta.com";
  $headers[] = "Accept: application/json, text/javascript, */*; q=0.01";
  $headers[] = "Origin: file://";
  $headers[] = "User-Agent: Mozilla/5.0 (Linux; Android 7.0; Redmi Note 4 Build/NRD90M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/70.0.3538.80 Mobile Safari/537.36";
  $headers[] = "Content-Type: application/x-www-form-urlencoded";
  $headers[] = "Accept-Language: id-ID,en-US;q=0.9";
  $headers[] = "X-Requested-With: com.tahu.fep";
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

  $result = curl_exec($ch);
  if (curl_errno($ch)) {
      echo 'Error:' . curl_error($ch);
  }
  curl_close ($ch);
  
  echo "Imformasi : >>>>>".json_decode($result,true)['msg']."<<<<< \n";
}
