<?php session_start() ?>
<?php require_once('Connections/config.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$colname_disease = "-1";
if (isset($_SESSION['disease'])) {
  $colname_disease = $_SESSION['disease'];
}
mysql_select_db($database_config, $config);
$query_disease = sprintf("SELECT * FROM treatment WHERE disease = %s", GetSQLValueString($colname_disease, "text"));
$disease = mysql_query($query_disease, $config) or die(mysql_error());
$row_disease = mysql_fetch_assoc($disease);
$totalRows_disease = mysql_num_rows($disease);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="650" height="154" border="0" align="center">
  <tr>
    <td width="162" align="left" valign="top">Disease:</td>
    <td width="478" align="left" valign="top"><?php echo $row_disease['disease']; ?></td>
  </tr>
  <tr>
    <td align="left" valign="top">Treatment:</td>
    <td align="left" valign="top"><?php echo $row_disease['treatment']; ?></td>
  </tr>
  <tr>
    <td align="left" valign="top">Medication:</td>
    <td align="left" valign="top"><?php echo $row_disease['medication']; ?></td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
</table>
</body>
</html>
<?php
mysql_free_result($disease);
?>
