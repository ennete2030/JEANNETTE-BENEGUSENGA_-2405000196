<!DOCTYPE html>
<html>
<head>
  <title>php</title>
</head>
<body>
  <?php
    $sentence = "the main bod of book";
    echo strtolower($sentence);
    echo strlen($sentence);
    $sentence[0] = "b";
    echo $sentence;
    echo str_replace("book", "college", $sentence);
    echo substr($sentence, 0);
  ?>
</body>
</html>

