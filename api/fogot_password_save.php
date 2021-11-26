<?PHP

require_once( 'class.db.php' );

//Initiate the class
// $database = DB::getInstance();
$id = $_POST['userid'];
$database = "SELECT passwordhash from tbl_users where userid = $id" ;
$password=md5($_POST['passwd']);
$values = array(
    'passwordhash' => $password,
    
);
$add_query = $database->update('tbl_users', $values );
if( $add_query )
{
    echo 'success';
}


?>