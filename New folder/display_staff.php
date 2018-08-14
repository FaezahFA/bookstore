<html>
<title>displaystaff</title>
<body bgcolor="#FFCCFF">
<div align="center">
  <table width="830" height="391">
    <tr>
      <td bgcolor="#FFFFFF"><p align="center"><img src="banner.jpg" width="759" height="106"/></p>
        <div align="right">
          <p>
<?php
session_start();
if(isset($_SESSION['username']) && $_SESSION['username'] == "Administrator")
{
?>
          Hi, <?php echo $_SESSION['username']; ?> [<a href="logout.php">Logout</a>]</p>
          <div align="center">
            <table width="124" height="52" border="1">
              <tr bgcolor="#FFCCFF">
<td width="92" bgcolor="#FFCCFF"><div align="center"><a href="menus.php"/><img src="back.jpg" width="55" height="44"/></a></div></td>
<td width="92"><div align="center"><a href="menus.php"><img src="home.gif" alt="" width="55" height="44" /></a></div></td>
</tr></table>

  </p>
          </div>
          
      </div></td>
    </tr>
  </table>
  
  
  
  
</div>

  <div align="center">
  <p>
    <?php
	include ("dbconn.php");

	//$staffname=$_POST['staffname'];
	$select="SELECT * FROM staff ";
	//$from="FROM bookstore_baru WHERE staffname ='$staffname'";
	//$query=$select.$from;
	$result=mysql_query($select);
	$row= mysql_num_rows($result);
	
	if($row >0)
	{ 
	
	?>
  </p>
  <TABLE width="462" height="191" border="50" cellpadding="9" cellspacing="0">
    <TR>
<TH width="78" bgcolor="#FF9966"><strong>Staff</strong></TH>
<th width="74" bgcolor="#FF9966"><strong>Details</strong></th>
<th width="72" bgcolor="#FF9966"><strong>Update</strong></th>
<th width="58" bgcolor="#FF9966"><strong>Delete</strong></th>
</TR>

<?php
while($row = mysql_fetch_array($result, MYSQL_ASSOC))
{
?>
<TR bgcolor="#FFFFFF">
<td height="62"><div align="center"><?php echo $row['staffname']; ?></div></td>
<td><div align="center"><a href="detailst.php?staffid=<?php echo $row['staffid'];?>"><img src="details.gif" width="56" height="43" /></a></div></td>
<td><div align="center"><a href="updates.php?staffid=<?php echo $row['staffid']; ?>"></a><a href="updates.php?staffid=<?php echo $row['staffid']; ?>"><img src="update.gif" width="56" height="43" /></a></div></td>
<td><div align="center"><a href="deletes.php?staffid=<?php echo $row['staffid']; ?>"><img src="delete.gif" width="56" height="43" /></a></div></td>
</TR>

<?php
}
}
}

?>

</TABLE>
</div>
</body>
</html>