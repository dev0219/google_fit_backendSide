<?PHP
//Initiate the class
$database = DB::getInstance();
$username = strip_tags($_POST['reminder_credential']);
if(isset($_POST['email'])) {
    $query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
    $users = $database->get_results( $query );

    if(!empty($users)) {
        $randomNum=substr(str_shuffle("0123456789abcdefghijklmnopqrstvwxyzABCDEFGHIJKLMNOPQRSTVWXYZ"), 0, 6);
        //  send code to email //

        $to = $_POST['email'];
        $confirmKey = 2;
        $subject = 'Forgot password';
        $message = 'Hi sir. <br><br> Plese input your verify code : <h2> '.$randomNum.' </h2>';
        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=iso-8859-1';
        mail($to, $subject, $message, implode("\r\n", $headers));

        $current_user_email = array(
            'email'=>$_POST['email']
        );
        $updatedata = array(
            'verifycode' => $randomNum, 
        );
        $verifycode->update('users', $data, $current_user_email);

        $jsonobj = array(
            "status" => "success",
            "msg" => "Please check your verify code."
         );
        echo json_encode($jsonobj); 

    }else{
        $jsonobj = array(
            "status" => "invalid",
            "msg" => "Please check your email."
         );
        echo json_encode($jsonobj);
    };

}elseif(isset($_POST['verifycode'])) {
    $receive_verifycode = $_POST['verifycode'];
    $query = "SELECT * FROM users WHERE verifycode='$receive_verifycode' LIMIT 1";
    $users = $database->get_results( $query );
    if(!empty($users)) {
        $jsonobj = array(
            "status" => "invalid",
            "msg" => "Please check your email."
         );
        echo json_encode($jsonobj);
    };
}elseif(isset($_POST['password'])) {
    $current_user_verifycode = array(
        'verifycode' => $receive_verifycode
    );
    $updatepassword = array(
        'password' => md5($_POST['password']), 
    );
    $verifycode->update('users', $updatepassword, $current_user_verifycode);
    $jsonobj = array(
        "status" => "success",
        "msg" => "Successfully changed."
     );
    echo json_encode($jsonobj);
}
?>