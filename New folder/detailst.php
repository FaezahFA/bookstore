<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>detailst</title>
</head>
<body bgcolor="#FFCCFF">
<div align="center">
  <table width="830" height="391">
    <tr>
      <td width="596" bgcolor="#FFFFFF"><p align="center"><img src="banner.jpg" width="759" height="106">
        </p>
        <p align="right">
<?php
session_start();
if(isset($_SESSION['username']) && $_SESSION['username'] == "Administrator")
{
?>
          Hi, <?php echo $_SESSION['username']; ?> [<a href="logout.php">Logout</a>]</p></p>
      </p>
        <div align="center">
          <table width="124" height="52" border="1">
            <tr bgcolor="#FFCCFF">
              <td width="92" bgcolor="#FFCCFF"><div align="center"><a href="../bookstore/display_staff.php"/><img src="back.jpg" width="55" height="44"/></a></div></td>
              <td width="92"><div align="center"><a href="menus.php"><img src="home.gif" alt="" width="55" height="44" /></a></div></td>
            </tr>
          </table>
          <?php
if (isset($_GET['staffid']))
$staffid = $_GET['staffid'];
else
$staffid = 0;
include ("dbconn.php");
$query = "SELECT * FROM staff WHERE staffid = '$staffid' ";
$result = mysql_query($query) or die('SQL error');
$row = mysql_fetch_array($result, MYSQL_ASSOC);
?>
<table width="76%" height="634" border="50"  bgcolor="#CCCCCC">
            <tr>
            <td width="494" height="530" bgcolor="#FFCC99">
                <h2 align="center"><strong>Details <?php echo $row['staffname']; ?> </strong></h2>
                <div align="center">
                  <table width="508" height="442"  border="3" cellpadding="5">
                    <td width="130" bgcolor="#FF9966"><div align="left">Staff Name</div></td>
                      <td width="342" bgcolor="#FFFFFF"><div align="left"><?php echo $row['staffname']; ?></div></td>
                      </tr>
                    <tr>
                      <td bgcolor="#FF9966"><div align="left">Staff IC</div></td>
                      <td bgcolor="#FFFFFF"><div align="left"><?php echo $row['staffic']; ?></div></td>
                    </tr>
                    <tr>
                      <td bgcolor="#FF9966"><div align="left">Staff Address</div></td>
                      <td bgcolor="#FFFFFF"><div align="left"><?php echo $row['staffadd']; ?></div></td>
                    </tr>
                    <tr>
                      <td bgcolor="#FF9966"><div align="left">Staff Age</div></td>
                      <td bgcolor="#FFFFFF"><div align="left"><?php echo $row['staffage']; ?></div></td>
                    </tr>
                    <tr>
                    <td bgcolor="#FF9966"><div align="left">Staff Phone Number</div></td>
                      <td bgcolor="#FFFFFF"><div align="left"><?php echo $row['staffphonenum']; ?></div></td>
  <?php
}
?>
                  </table>
                </div>
                <div align="center">
                  
                  <form id="form1" name="form1" method="post" action="">
                    <table width="131" height="69" border="3" cellpadding="2" cellspacing="2">
                      <tr bgcolor="#FFCCFF">
                        <td bgcolor="#FF9966"><div align="center">
                          <h5><a href="updates.php?bookid=<?php echo $row['staffid']; ?>"><img src="update.gif" width="46" height="36" /></a><strong>Update</strong></h5>
                          </div></td>
                        
                        <td bgcolor="#FF9966"><div align="center">						
                    <h5><a href="deletes.php?staffid=<?php echo $row['staffid']; ?>"><img src="delete.gif" width="46" height="36" /></a><strong>Delete</strong></h5>
                        </div></td>
                      </tr>
                    </table>
                  </form>
                </div>
           
        
      </table>
          <p>&nbsp;</p>
        </div>
      <div align="center"></div></td>
    </tr>
  </table>
</div>
</body>
</html>




