<html>
<meta charset="utf-8">

<?php
$text = $_POST['text'];
$token = '289898640:AAEwkwRV105fVz0DbWFKGHpFt3LZ8LQSJss';
if($text){
  file_get_contents('https://api.telegram.org/bot'.($token).'/sendMessage?chat_id=119296662&text='.$text);
}
?>
<p>
  ارسال شد
</p>
<p>برگشت
  <a href='https://negative.cleverapps.io/send/'>برگشتن</a>
</p>
</html>
