<?php
$handle = fopen('../php/Prayer_Requests.txt', 'a');
$valueofname = ($_REQUEST['your_name']);
$valueofaddress = ($_REQUEST['address']);
$valueofphoneno = ($_REQUEST['phoneno']);
$valueofmessage = ($_REQUEST['message']);
fwrite($handle, "\n");
fwrite($handle, "Name: $valueofname");
fwrite($handle, "\n");
fwrite($handle, "Address: $valueofaddress");
fwrite($handle, "\n");
fwrite($handle, "Phone no: $valueofphoneno");
fwrite($handle, "\n");
fwrite($handle, "Message: $valueofmessage");
fwrite($handle, "\n");
fclose($handle);
?>


<!DOCTYPE html>
<html>
<head></head>
<body onload=location.href="../pages/prayrequest.html">
</body>
</html>