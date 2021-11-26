<?PHP
session_start();
require_once( 'class.db.php' );

//Initiate the class
$database = DB::getInstance();

$email = strip_tags($_POST['email']);
$password = strip_tags($_POST['password']);
$query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
$users = $database->get_results( $query );



if(!empty($users)) {
    //Verifying the password
    foreach($users as $user){
        $hashedPwdDB = $user['password'];
        if (md5($password)==$hashedPwdDB){
            $_SESSION['id'] =$user['id'] ;
            $_SESSION['username'] = $user['username'] ;
            $_SESSION['email'] = $user['email'] ;
         
            $jsonobj = array(
               "status" => "success",
               "userinfo" => json_encode($user)
            );
            echo json_encode($jsonobj);
        }else {
            $jsonobj = array(
                "status" => "invalid",
                "msg" => "Please check your email id or password"
             );
            echo json_encode($jsonobj); 
        };	
    }    
}else {
    $jsonobj = array(
        "status" => "nouser",
        "msg" => "This user does not exist, please create account."
     );
    echo json_encode($jsonobj);
};

?>