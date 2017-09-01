<?php

require 'vendor/autoload.php';
include 'bootstrap.php';


use guestbook\Models\Guest;
use \Symfony\Component\HttpFoundation\Request;
use \Symfony\Component\HttpFoundation\Response;

$app = new Silex\Application();
$app['debug'] = true;

$app->get('/messages', function() use ($app){
	$_guest = new Guest();
	
	$guests = $_guest->all();
	
	$payload = [];
	//die(print_r($guests, true));
	foreach($guests as $_gst){
		//print_r($_gst);
		//print ("<h1>".$_gst->id."</h1>");
		//print ("<h1>".$_gst->guestname."</h1>");
		//print ("<h1>".$_gst->address."</h1>");
		//die(print_r($_gst,true));
		$payload[$_gst->id]=
		[
			'guestname' => $_gst->guestname,
			'address' => $_gst->address,
			'email'=> $_gst->email
		];
	}
	
	return json_encode($payload);
});


$app->post('/guest', function(Request $request) use($app) {
	$_guestname = $request->get('guestName');
	$_guestaddress = $request->get('guestAdress');
	$_email= $request->get('email');
	$_message= $request->get('message');
	$_browserinfo = $request->get('browserinfo');
	$_platform = $request->get('platform');
	$_ipaddress = $request->get('ipaddress');
	
	
	$guest = new Guest();
	$guest->guestname = $_guestname;
	$guest->address = $_guestaddress;
	$guest->email = $_email;
	$guest->message = $_message;
	$guest->browserinfo = $_browserinfo;
	$guest->platform = $_platform;
	$guest->ipaddress = $_ipaddress;
	$guest->save();
	
	if($guest->id){
		$payload = [
			'guestname' => $guest->guestname,
			'message_uri' => $guest->id
		];
		$code = 201;
	} else {
		$code = 400;
		$payload = [];
	}
	
	return new Response("Guest created",$code);
	//return $app->json($payload, $code);
});

$app->run();