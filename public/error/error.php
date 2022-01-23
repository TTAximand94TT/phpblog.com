<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Error page</title>
</head>
<body>
  <div>
    <h3>Error has occurred!</h3>
    <p>Error code: <b><?=$errno?></b></p>
    <p>Error text: <b><?=$errstr?></b></p>
    <p>In file: <b><?=$errfile?></b></p>
    <p>On line: <b><?=$errline?></b></p>
  </div>
</body>
</html>