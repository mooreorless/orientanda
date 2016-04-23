<?php
  session_start();

  header('location:../pages/search.php');

  $appId = '1de243ffe194e0838c4ffe8a585b4a503eff2c4c0f403930ed5c3cd40e71d010';
  $appSecret = 'eb4f202ffcf30f1272dae89642337d7d3fd94f3f1cde5b27fabc3acb2d3a94a1';
  $redir = 'http://local.orientanda.com/pages/login.php';
  $loginUrl = 'https://my.tanda.co/api/oauth/authorize?scope=me&client_id='.$appId.'&redirect_uri='.$redir.'&response_type=code';
  $token = '37ec1ebe28b7776d4bbf3ae240caadff2867286387323192f6dd1d8b1d221c12';

  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, 'https://my.tanda.co/api/v2/users');
  curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    'Authorization: bearer ' . $token
    )
  );
  $data = curl_exec($curl);
  curl_close($curl);

 ?>
