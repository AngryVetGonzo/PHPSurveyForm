<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <title>Survery Form Result</title>
</head>
<body>
  <h1>Submitted Form</h1>
  <p>Name: <?= $_POST['name'] ?> </p>
  <p>Dojo Location: <?= $_POST['location'] ?> </p>
  <p>Favorite Language: <?= $_POST['language'] ?> </p>
  <p>Comment: <?= $_POST['description'] ?> </p>
</body>
</html>