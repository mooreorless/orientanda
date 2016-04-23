<?php
  $token = '37ec1ebe28b7776d4bbf3ae240caadff2867286387323192f6dd1d8b1d221c12';

  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, 'https://my.tanda.co/api/v2/users');
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: bearer ' . $token));
  $data = curl_exec($curl);
  curl_close($curl);

?>
