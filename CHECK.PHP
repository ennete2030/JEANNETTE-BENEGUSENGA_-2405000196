<!DOCTYPE html>
<html>
<head>
    <title>Check File</title>
</head>
<body>
    <h1>Check File Output</h1>

    <p>This file includes <strong>fail.php</strong> below shown:</p>

    <?php
    // Include the broken file an error
    include("fail.php");
    ?>

</body>
</html>
