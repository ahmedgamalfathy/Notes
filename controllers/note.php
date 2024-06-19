<?php
//connection database.
$config= require( "config.php");
$db= new Database($config['Database']);
//this variables.
$heading="Note";
$title="note";
$currentUser=4;
$note =$db->query('select * from notes where id = :id',[
      'id'=>$_GET['id']
      ])->findOrFail();

 
 authorize($note['user_id'] === $currentUser);    
    // if($note['user_id'] !== $currentUser){
    //     abort(Response::FORBIDDEN);
    // }
require "views/note.view.php";