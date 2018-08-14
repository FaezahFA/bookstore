    <?php
/* include db connection file */
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'bookstore');
$sql = "UPDATE book SET 
					booktitle='$_POST[booktitle]',
					bookauthor='$_POST[bookauthor]',
					bookpublisher='$_POST[bookpublisher]',
					bookqty='$_POST[bookqty]',
					booksupplier='$_POST[booksupplier]'
					
					WHERE bookid='$_POST[bookid]'";
					
if(mysqli_query($con,$sql))
		header("refresh:1; url= menu.php");
	else
		echo "Not Update";

?>