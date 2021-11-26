<?PHP

require_once( 'class.db.php' );

//Initiate the class
$database = DB::getInstance();

if(isset($_POST)){
    $username=$_POST['name'];
    $email=$_POST['email'];
    $age=$_POST['age'];
    $gender = $_POST['gender'];
    $phone=$_POST['phone'];
    $country=$_POST['country'];
    $height=$_POST['height'];
    $weight=$_POST['weight'];
    $userStep=$_POST['step'];
    $BMI=$_POST['BMI'];
    $password=md5($_POST['password']);
    $date = date('Y-m-d h:i:s', time());
    $query = "SELECT * FROM users WHERE username='$username'";
    $data = $database->get_results( $query );
    if($data){
        $jsonobj = array(
            "status" => "invalid",
            "msg" => "This user is exist already."
         );
         echo json_encode($jsonobj);
    }else{
        $values = array(
            'username' => $username,
            'email' => $email,
            'gender' => $gender,
            'age' => $age,
            'phone' => $phone,
            'country' => $country,
            'height' => $height,
            'weight' => $weight,
            'bmi' => $BMI,
            'step' => $userStep,
            'password' => $password,            
        );
        $add_query = $database->insert('users', $values );
        if( $add_query )
        {
            $jsonobj = array(
                "status" => "success",
                "msg" => 'Registration Successful. Please Login to proceed'
             );
             echo json_encode($jsonobj);
        }
    }
};


?>