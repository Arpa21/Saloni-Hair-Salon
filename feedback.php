
<html>
<body>
<h1> Saving the feedback to database </h1>
<?php
$First_name = $_Request["First_name"];
echo "$First_name <br>";
$connect = OCILogon ("abaruasu", "4kkE7YxP", "SSID");
$sql = "insert into First_name values ('First_name')";
$stmt = OCIParse($connect, $sql);
OCIExecute($stmt);

$Last_name = $_Request["Last_name"];
echo "$Last_name <br>";
$connect = OCILogon ("abaruasu", "4kkE7YxP", "SSID");
$sql = "insert into Last_name values ('Last_name')";
$stmt = OCIParse($connect, $sql);
OCIExecute($stmt);
$email = $_Request["email"];
echo "$email <br>";
$connect = OCILogon ("abaruasu", "4kkE7YxP", "SSID");
$sql = "insert into email values ('email')";
$stmt = OCIParse($connect, $sql);
OCIExecute($stmt);
$comments = $_Request["comments"];
echo "$comments <br>";
$connect = OCILogon ("abaruasu", "4kkE7YxP", "SSID");
$sql = "insert into comments values ('comments')";
$stmt = OCIParse($connect, $sql);
OCIExecute($stmt);

?>
</body>
</html>

