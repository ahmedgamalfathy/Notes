<?php
//connection database.
$config= require( "config.php");
$db= new Database($config['Database']);
//this variables.
$heading="My Notes";
$title="notes";
$notes=$db->query('select * from notes where user_id = 4')->all();


require "views/notes.view.php";