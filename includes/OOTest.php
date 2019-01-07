<?php 
include_once("user.php");
include_once("DBOperation.php");
include_once("manage.php");

// $db = new Database();
// $db->connect();


// $opr = new DBOperation();
// // echo $opr->addCategory(1,"Mobiles");
// echo "<pre>";
// print_r($opr->getAllRecord("categories"));

// echo "<br/>";

// $user = new User();
// echo $user->createUserAccount("Test","rizwan1@gmail.com","1234567890","Admin");
// echo '<br/>'.$user->userLogin("rizwan1@gmail.com","1234567890");
// echo '<br/>'.$_SESSION["username"];

// echo "<br/>";


// $obj = new Manage();
// echo "<pre>";
//print_r($obj->manageRecordWithPagination("categories",1));
//echo $obj->deleteRecord("categories","cid",14);
//print_r($obj->getSingleRecord("categories","cid",10));
// echo $obj->update_record("categories",["cid"=>1],["parent_cat"=>0,"category_name"=>"Electro","status"=>1]);



// $email1 = 'manoj@ddc';
// if ($email1 != "") {
//     $email = filter_var($email1, FILTER_SANITIZE_EMAIL);
//     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         echo $errors = "$email is <strong>NOT</strong> a valid email address.<br/><br/>";
//     }else{
//     	echo $email.' email is valid';
//     }
// } else {
//     echo $errors = 'Please enter your email address.<br/>';
// }
// echo var_dump(filter_var($email1, FILTER_SANITIZE_EMAIL));
 ?>