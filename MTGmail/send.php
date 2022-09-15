<?php echo '<pre>';
$to = $_GET["to"];
$subject = $_GET["subject"];
$main = $_GET["main"];
$output = shell_exec("  
echo -e 'Subject: $subject ' ' $main' | sendmail -v $to" );
'</pre>'
?>

<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body >
    <?php
    echo "<pre>$output</pre>";
    ?>
  </body>
</html>