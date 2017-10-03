

$conn = mysqli_connect('localhost', 'root', 'th33ndism3', 'filelog');

if (!$conn) {
   die("Connection failed: ".mysqli_connect_error());

