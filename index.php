<html>
<head>
  <meta charset="UTF-8">
  <title>Hi</title>
  <style>
  p.welcome {
    color:red;
    text-align: center;
    font-size: 40px;
  }
  p.matn{
    color: black;
    font-size: 30px;
    font-family: sans-serif;
  }
  input.1{
    font-size: 50px;
  }
  </style>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<p class='welcome'>
  سلام شما میتونید پیام خودتونو ازین بخش ارسال کنید
</p>
<p class='matn'>
  در این قسمت پیام خودتونو تایپ کنید
</p>
<!-- form -->
<form action='post.php' method='post'>
  <p>
    <textarea name="text" cols=40 rows=4>پیام شما
</textarea>
</p>
<p>
  <button type="submit" class="btn btn-default">Submit</button></p>
</form>
</html>
</body>
