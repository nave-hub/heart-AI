<?php session_start() ?>
<?php require_once('Connections/config.php'); ?>
<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

// ** Logout the current user. **
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  //to fully log out a visitor we need to clear the session varialbles
  $_SESSION['MM_Username'] = NULL;
  $_SESSION['MM_UserGroup'] = NULL;
  $_SESSION['PrevUrl'] = NULL;
  unset($_SESSION['MM_Username']);
  unset($_SESSION['MM_UserGroup']);
  unset($_SESSION['PrevUrl']);
	
  $logoutGoTo = "index.php";
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }
}
?>
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

mysql_select_db($database_config, $config);
$query_Recordset1 = "SELECT * FROM disease";
$Recordset1 = mysql_query($query_Recordset1, $config) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
$colname_re = "-1";
if (isset($_SESSION['username'])) {
  $colname_re = $_SESSION['username'];
}
mysql_select_db($database_config, $config);
$query_re = sprintf("SELECT * FROM users WHERE username = %s", GetSQLValueString($colname_re, "text"));
$re = mysql_query($query_re, $config) or die(mysql_error());
$row_re = mysql_fetch_assoc($re);
$totalRows_re = mysql_num_rows($re);
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.0.0.58833 -->
    <meta charset="utf-8">
    <title>Heart Disease Diagnosis</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">


    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>
<meta name="description" content="Description">
<meta name="keywords" content="Keywords">



<style>.art-content .art-postcontent-0 .layout-item-0 { border-top-width:2px;border-top-style:solid;border-top-color:#BDBDBD;margin-top: 5px;margin-bottom: 5px;  }
.art-content .art-postcontent-0 .layout-item-1 { padding-top: 0px;padding-right: 10px;padding-bottom: 0px;padding-left: 10px;  }
.art-content .art-postcontent-0 .layout-item-2 { background: ; padding-top: 0px;padding-right: 10px;padding-bottom: 0px;padding-left: 10px;  }
.art-content .art-postcontent-0 .layout-item-3 { padding-right: 10px;padding-left: 10px;  }
.ie7 .post .layout-cell {border:none !important; padding:0 !important; }
.ie6 .post .layout-cell {border:none !important; padding:0 !important; }

#apDiv2 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:1;
	left: 48px;
	top: 351px;
}
</style></head>
<body>
<div id="art-main">
<header class="art-header clearfix">


    <div class="art-shapes">
<h1 class="art-headline" data-left="2.51%">
    <a href="#">HEART DIS</a>EASE
</h1>
<h2 class="art-slogan" data-left="2.51%">Expert System</h2>

<div class="art-object0" data-left="100%">
  <div class="style2" id="apDiv1">www.netanimations.net/animated_<br>
moving_hearts_love_valentines<br>
_animations.htm</div>
</div>
<div class="art-object369268148" data-left="0%"></div>

  </div>

<nav class="art-nav clearfix">
    <div class="art-nav-inner">
    <ul class="art-hmenu">
    <li><a href="member.php" class="active">Home</a></li>
    <li><a href="History.php">Test History</a></li>
    <li><a href="changepassword.php">Change Password</a></li>
    <li><a href="<?php echo $logoutAction ?>">Log Out</a></li>
    </ul> 
    </div>
  </nav>

                    
</header>
<div class="art-sheet clearfix">
            <div class="art-layout-wrapper clearfix">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content clearfix"><article class="art-post art-article">
                                
                                                
                <div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout">
    <div class="art-content-layout-row">
<div class="art-layout-cell layout-item-1" style="width: 40%" >
         <p><img width="300" height="543" alt="" src="images/beatm.gif" class=""></p>

        <div id="apDiv2"><span class="style2">www.netanimations.net/animated_<br>
moving_hearts_love_valentines<br>
_animations.htm</span></div>
    </div><div class="art-layout-cell layout-item-2" style="width: 60%" ><p class="a" ><?php echo "Dear  ".$row_re['surname']; ?>
&nbsp;
<?php echo $row_re['othername']; $_SESSION['username']=$row_re['username']?>
&nbsp;<br>
<br>
<font color="#FF0000">Please Select From the Symptoms Below</font>
<center>
<table width="741" height="78" border="0" class="a">
  <tr>
    <td width="735" height="74" align="left" valign="top"class="a"><form action="member_d_pro.php" method="post" enctype="multipart/form-data" name="form1" id="form1"><table width="722" border="0">
  <?php do { ?>
    <tr>
      <td width="31"><input type="checkbox" value="<?php echo $row_Recordset1['disease']; ?>" name="<?php echo $row_Recordset1['status']; ?>" id="checkbox" />
        <label for="checkbox"></label></td>
      <td width="681"class="a"><?php echo $row_Recordset1['symptom']; ?></td>
    </tr>
    <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
</table>
        <p>
          <input type="submit" class="art-button" name="button" id="button" value="Diagnose" />
          <input name="username" type="hidden" value="<?php echo $row_re['username']; ?>" size="20">
		  <input name="password" type="hidden" value="<?php echo $row_re['password']; ?>" size="20">
		  </p>
    </form></td>
  </tr>
</table>

</center>




    </p>  </div>
    </div>
</div>
<div class="art-content-layout-br layout-item-0">
</div><div class="art-content-layout">
    <div class="art-content-layout-row">

    </div>
</div>
</div>
                                
                </article></div>
                    </div>
                </div>
            </div>
    </div>
<footer class="art-footer clearfix">
  <div class="art-footer-inner">
<div class="art-content-layout">

</div>


  </div>
</footer>

</div>




</body></html>
<?php
mysql_free_result($Recordset1);
?>
<?php
mysql_free_result($re);
?>
