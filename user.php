<?php
class User{
  private $name;
  private $email;
  private $password;

  public function __construct($name,$email,$password){
    $this->name=$name;
    $this->email = $email;
    $this->password = $password;
  }

  public static function check_password($password){
    if(strlen($password)<12){
      return false;
    }
    if (!preg_match('/[A-Z]/', $password)) {
      return false;
    }
    if(!preg_match('/[a-z]/',$password)){
      return false;
    }
    if(!preg_match('/[\W_]/',$password)){//checks for special character
      return false;
    }

    return true;
  }
  public static function validate_email($email) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo("$email is a valid email address \n");
    } else {
      echo("$email is not a valid email address \n");
    }
  }

  public function copy_with($new_name=null,$new_email=null,$new_password=null){
    $name=$new_name??$this->name;
    $email=$new_email??$$this->email;
    $password=$new_email??$this->password;

    return new User($name, $email, $password);
  }
  public function get_password(){
    return $this->password;
  }
  public function get_email(){
    return $this->email;
  }
}

$user= new User("lyne","lynesultane@gmail.com","Password123!");


if (User::check_password($user->get_password())) {
  echo "Password is valid.\n";
} else {
  echo "Password is invalid.\n";
}

User::validate_email($user->get_email());

$new_user = $user->copy_with(null, "new.email@example.com",null);

echo $new_user->get_email();
