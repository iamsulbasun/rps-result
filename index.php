<?php
  include 'connectiondb.php';

  $qr = "select * from student";
  $statement=$db->prepare($qr);
?>
<!DOCTYPE html>
<body>
<head>
    <title>Result Processing System</title>
</head>
</body>
</html>