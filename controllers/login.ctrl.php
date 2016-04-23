<?php
  session_start();

  $appId = '1de243ffe194e0838c4ffe8a585b4a503eff2c4c0f403930ed5c3cd40e71d010';
  $appSecret = 'eb4f202ffcf30f1272dae89642337d7d3fd94f3f1cde5b27fabc3acb2d3a94a1';
  $redir = 'http://local.orientanda.com/pages/login.php';
  $loginUrl = 'https://my.tanda.co/api/oauth/authorize?scope=me&client_id='.$appId.'&redirect_uri='.$redir.'&response_type=code';
  $code = '';

  if(isset($_GET['code'])) {
    $code = $_GET['code'];

    curl https://my.tanda.co/api/oauth/token -X POST -H "Cache-Control: no-cache" \
    -F "client_id=YOUR_APPLICATION_ID" \
    -F "client_secret=YOUR_SECRET" \
    -F "code=AUTHORIZATION_CODE" \
    -F "redirect_uri=YOUR_REDIRECT_URI" \
    -F "grant_type=authorization_code"

  }

 ?>
