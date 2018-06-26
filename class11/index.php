$connection = mysqli_connect('127.0.0.1', 'root', 'root');
if(!$connection) {
    die("Your redentials not good, bad boy" );
}
$db = mysql_select_db("test");

if(!$db) {
    die('Database not found');
}

$query = mysql_query('SELECT * FROM users');

$no = mysql_num_rows($query);

var_dump($no);

while($row= mysql_fetch($query, MYSQL_OBJECT)) {
echo $row->username;

}



mysql_close($connection);