<title>Staff Registration </title>
</head>
<html>
<body bgcolor="#FFCCFF">
<div align="center">
  <table width="830" height="276">
    <tr>
      <td bgcolor="#FFFFFF"><p align="center"><img src="banner.jpg" width="806" height="105"></p>
        <p align="right">
          <?php
session_start();
if(isset($_SESSION['username']) && $_SESSION['username'] == "Administrator")
{
?>
        Hi, <?php echo $_SESSION['username']; ?> [<a href="logout.php">Logout</a>]</p>
          
        <div align="center">
          <table width="124" height="52" border="1">
                <tr bgcolor="#FFCCFF">
                  <td width="92"><div align="center"><a href="#" onClick="history.back()"/><img src="back.jpg" width="55" height="44"/></a></a></div></td>
                  <td width="92"><div align="center"><a href="menus.php"><img src="home.gif" alt="" width="55" height="44" /></a></div></td>
                </tr>
          </table>
            </div>
            <p align="center">
             <?php
		/* include db connection file */
		include("dbconn.php");
		if(isset($_POST['submit'])){
		/* capture values from HTML form */
		
		$staffname = $_POST['staffname'];
		$staffic = $_POST['staffic'];
		$staffadd = $_POST['staffadd'];
		$staffage = $_POST['staffage'];
		$staffphonenum = $_POST['staffphonenum'];
		
		
		$sql0 = "SELECT staffname FROM staff WHERE staffname = '$staffname' ";
		$query0 = mysql_query($sql0) or die ("Error: " . mysql_error());
		$row0 = mysql_num_rows($query0);
		if($row0 != 0){
		echo 'Record Exist! Click <a href="insert_staff.php">Insert Staff</a> to Add. ';
		}
		else{
		/* execute SQL INSERT command */
		$sql2 = "INSERT INTO staff (staffname, staffic , staffadd , staffage , staffphonenum)
		
		VALUES ('" . $staffname . "', 
				'" . $staffic . "', 
				'" . $staffadd . "',
				'" . $staffage . "', 
				'" . $staffphonenum . "' )";
		mysql_query($sql2) or die ("Error: " . mysql_error());
		
		/* display a message */
		
		echo 'Data has been succesfully saved. Click <a href="menu.php">Back</a> to Main Menu';
		
		}
		}
?>
</p>
        <p align="center">&nbsp;</p></td>
    </tr>
  </table>
</div>
 <?php
}
mysql_close($dbconn);

?>
</body>
</html>