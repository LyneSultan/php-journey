<?php
function check_palindrome($string){
  $length = 0;
  $index=0;
  while($string[$index] !== "")
  {
    $length++;
    $index++;
  }
  // $length=strlen($string);
  for ($i=0;$i<$length/2;$i++){
    if($string[$i]!=$string[$length-$i-1]){
      return false;
    }

  }
  return true;
}


$string="madam";


if (check_palindrome($string))
{
  echo json_encode([
    "String"=>$string,
    "message"=>"it is palindrome"]);
}
else{
  echo json_encode([
    "String"=>$string,
    "message"=>"it is not palindrome"]);
}

