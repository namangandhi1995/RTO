<html><body background=""><?php define('DB_HOST', 'localhost'); 
define('DB_NAME', 'sign'); 
define('DB_USER','root'); 
define('DB_PASSWORD','');
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
/* $ID = $_POST['user']; $Password = $_POST['pass'];
*/ function SignIn() { session_start();
//starting the session for user profile page if(!empty($_POST['user']))
	//checking the 'user' name which is from Sign-In.html, is it empty or have some text
	{ $query = mysql_query("SELECT * FROM userinfo where user_name = '$_POST[user]' AND password = '$_POST[pass]'") or die(mysql_error());
$row = mysql_fetch_array($query) or die(mysql_error()); 
if(!empty($row['user_name']) AND !empty($row['password']))
	{ $_SESSION['user_name'] = $row['password'];
echo 'Welcome to admin' 
	; }
else { echo 'SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...'; } } }
if(isset($_POST['submit'])) { SignIn(); }
?>
</body>
</html>

