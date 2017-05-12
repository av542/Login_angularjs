<?php
$user=json_decode(file_get_contents('php://input'));
if($user->mail=='verma10ayush@gmail.com' && $user->pass='1234')
	print 'success';
else print 'error' ;
?>