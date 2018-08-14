<title>Maklumat </title>
</head>
<html>
<body bgcolor="#FFCCFF">
<div align="center">
   <table width="830" height="391">
    <tr>
      <td bgcolor="#FFFFFF">
      <div align="center"><img src="banner.jpg" width="759" height="106"/>
      </div>
<form name="form" method="post" action="updateBookEngine.php">
        <p align="right">
        
<?php
session_start();
if(isset($_SESSION['username']) && $_SESSION['username'] == "Staff")
{
?>
          Hi, <?php echo $_SESSION['username']; ?> [<a href="logout.php">Logout</a>]</p>
          <div align="center">
            <table width="124" height="52" border="1">
              <tr bgcolor="#FFCCFF">
                <td width="92"><div align="center"><a href="../bookstore/display_books.php"/><img src="back.jpg" width="55" height="44"/></a></a></div></td>
                <td width="92"><div align="center"><a href="menu.php"><img src="home.gif" alt="" width="55" height="44" /></a></div></td>
          </tr>
          </table>
            <p>
</p>
          </div>
<?php
/* include db connection file*/
include("dbconn.php");
/* capture student number */

if(isset($_GET['bookid'])=='bookid')
{$bookid = $_GET['bookid'];
/* execute SQL statement */
$sql= "SELECT * FROM book WHERE bookid = '$bookid' ";
$query = mysql_query($sql) or die ("Error: " . mysql_error());
$row = mysql_num_rows($query);
if($row == 0)
{
echo "Data Not Found !";
}
else
{
$r = mysql_fetch_assoc($query);
$bookid = $r['bookid'];
$booktitle = $r['booktitle'];
$bookauthor = $r['bookauthor'];
$bookpublisher =$r['bookpublisher'];
$bookqty = $r['bookqty'];
$booksupplier = $r['booksupplier'];
?>
          </p>
        <div align="center">
          <table width="624" height="339" border="50">
                <input name="bookid" type="hidden" id="bookid"  value="<?php echo $bookid; ?>" required/>
            <tr>
              <td width="147" height="39" bgcolor="#FF99FF">Book Title:</td>
              <td width="425" bgcolor="#CCCCCC"><div align="left">
                <input name="booktitle" type="text" id="booktitle"  value="<?php echo $booktitle; ?>" required/>
              </div></td>
              </tr>
            <tr>
              <td height="34" bgcolor="#FF99FF">Book Author:</td>
              <td bgcolor="#CCCCCC"><div align="left">
                <input name="bookauthor" type="text" id="bookauthor" value="<?php echo $bookauthor; ?>" required/>
              </div></td>
              </tr>
            <tr>
              <td height="34" bgcolor="#FF99FF">Book Publisher:</td>
              <td bgcolor="#CCCCCC"><div align="left">
                <input name="bookpublisher" type="text" id="bookpublisher"  value="<?php echo $bookpublisher; ?>" size="40" required/>
              </div></td>
              </tr>
            <tr>
              <td height="39" bgcolor="#FF99FF">Book Quantity:</td>
              <td bgcolor="#CCCCCC"><div align="left">
                <input name="bookqty" type="int" id="bookqty" value="<?php echo $bookqty; ?>" required/>
              </div></td>
              </tr>
            <tr>
              <td height="35" bgcolor="#FF99FF">Book Supplier: </td>
              <td bgcolor="#CCCCCC"><input name="booksupplier" type="text" id="booksupplier" value="<?php echo $booksupplier; ?>" /></td>
            </tr>
                   
            <tr>
              <td height="40" colspan="3" bgcolor="#999999"><div align="center">
                <input type="submit" name="Update" value="Update" />
              </div></td>
              </tr>
            </table>
          </div>
</form>
</td>
    </tr>
  </table>
</div>
<?php
}
}
}

mysql_close($dbconn);
?>
</body>
</html>
