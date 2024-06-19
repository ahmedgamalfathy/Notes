<?php 
require 'validator.php';
// require('validator.php');

$config= require'config.php'; 
$db= new Database($config['Database']);

$heading ="Creat Note";
$title="Create Note";


if($_SERVER['REQUEST_METHOD']==='POST'){
  $errors=[];
  if(! validator::email('ahmedgamalfathy@gmail.com')){
    dd('that is not a valid email');
  }
  if (! validator::string($_POST['body'], 1, 1000)) {
    $errors['body'] = 'A body of no more than 1,000 characters is required.';
   }

  if(empty($errors)){
    $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)',[
      'body' => $_POST['body'],
      'user_id' => 3   
     ]);
  }


}
require 'views/note-create.php';