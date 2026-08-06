<?php
<<<<<<< HEAD
declare(strict_types=1);
error_reporting(E_ALL);
ini_set('display_errors',true);

$base_url = "https://dev01.healthcare_appofficina.it";
$login= "/api/user/login";
$addContact= '/api/healthcare_app/add-contact';
$email = 'info@veritas.it';
$pass = 'veritas123';


$ch = curl_init($base_url.$login);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

$post=['email'=>$email,'password'=>$pass];

curl_setopt($ch,CURLOPT_POSTFIELDS,$post);

$response= curl_exec($ch);
$json=json_decode($response);

$data=[
    'survey_pdf_id' => '39275',
    'mobile_phone' => '321456789',
    'user_email'=> $email,
    'email' => 'marco.sottana@gmail.com', 
    'language' => 'it', 
    'usesleft' => 1,
    'first_name' => 'Giacomo', 
    'last_name' => 'Giocomo',
    'attribute_1' => '123', 
    'attribute_2' => '456', 
    'attribute_3' => '789',
];

$headers=[
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> f916df1 (.)
declare(strict_types=1);
error_reporting(E_ALL);
ini_set('display_errors', true);

<<<<<<< HEAD
$base_url = "https://dev01.healthcare_appofficina.it";
$login= "/api/user/login";
$addContact= '/api/healthcare_app/add-contact';
=======
$base_url = 'https://dev01.quaerisofficina.it';
$login = '/api/user/login';
$addContact = '/api/quaeris/add-contact';
>>>>>>> f916df1 (.)
$email = 'info@veritas.it';
$pass = 'veritas123';

$ch = curl_init($base_url.$login);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$post = ['email' => $email, 'password' => $pass];

curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

$response = curl_exec($ch);
$json = json_decode($response);

$data = [
    'survey_pdf_id' => '39275',
    'mobile_phone' => '321456789',
    'user_email' => $email,
    'email' => 'marco.sottana@gmail.com',
    'language' => 'it',
    'usesleft' => 1,
    'first_name' => 'Giacomo',
    'last_name' => 'Giocomo',
    'attribute_1' => '123',
    'attribute_2' => '456',
    'attribute_3' => '789',
];

<<<<<<< HEAD
$headers=[
=======
=======
>>>>>>> 2cb7d4f (.)
=======
>>>>>>> 11674ce (.)

declare(strict_types=1);
error_reporting(E_ALL);
ini_set('display_errors', true);

$base_url = 'https://dev01.quaerisofficina.it';
$login = '/api/user/login';
$addContact = '/api/quaeris/add-contact';
$email = 'info@veritas.it';
$pass = 'veritas123';

$ch = curl_init($base_url.$login);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$post = ['email' => $email, 'password' => $pass];

curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

$response = curl_exec($ch);
$json = json_decode($response);

$data = [
    'survey_pdf_id' => '39275',
    'mobile_phone' => '321456789',
    'user_email' => $email,
    'email' => 'marco.sottana@gmail.com',
    'language' => 'it',
    'usesleft' => 1,
    'first_name' => 'Giacomo',
    'last_name' => 'Giocomo',
    'attribute_1' => '123',
    'attribute_2' => '456',
    'attribute_3' => '789',
];

$headers = [
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 11674ce (.)
=======
$headers = [
>>>>>>> f916df1 (.)
=======
>>>>>>> 2cb7d4f (.)
=======
>>>>>>> 11674ce (.)
>>>>>>> laraxot/dev
    'Authorization: Bearer '.$json->token,
];

curl_setopt_array($ch, [
<<<<<<< HEAD
    CURLOPT_HTTPHEADER  => $headers,
    CURLOPT_URL => $base_url.$addContact,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POST => true,
    CURLOPT_RETURNTRANSFER  =>true,
    CURLOPT_VERBOSE     => true,
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    CURLOPT_HTTPHEADER  => $headers,
=======
    CURLOPT_HTTPHEADER => $headers,
>>>>>>> f916df1 (.)
    CURLOPT_URL => $base_url.$addContact,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POST => true,
<<<<<<< HEAD
    CURLOPT_RETURNTRANSFER  =>true,
    CURLOPT_VERBOSE     => true,
=======
=======
>>>>>>> 2cb7d4f (.)
=======
>>>>>>> 11674ce (.)
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_URL => $base_url.$addContact,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POST => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_VERBOSE => true,
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 11674ce (.)
=======
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_VERBOSE => true,
>>>>>>> f916df1 (.)
=======
>>>>>>> 2cb7d4f (.)
=======
>>>>>>> 11674ce (.)
>>>>>>> laraxot/dev
    CURLOPT_POSTFIELDS => $data,

]);

<<<<<<< HEAD
$response= curl_exec($ch);

echo '<pre>'.print_r($response,true).'</pre>';
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
$response= curl_exec($ch);

echo '<pre>'.print_r($response,true).'</pre>';
=======
$response = curl_exec($ch);

echo '<pre>'.print_r($response, true).'</pre>';
>>>>>>> 11674ce (.)
=======
$response = curl_exec($ch);

echo '<pre>'.print_r($response, true).'</pre>';
>>>>>>> f916df1 (.)
=======
$response = curl_exec($ch);

echo '<pre>'.print_r($response, true).'</pre>';
>>>>>>> 2cb7d4f (.)
=======
$response = curl_exec($ch);

echo '<pre>'.print_r($response, true).'</pre>';
>>>>>>> 11674ce (.)
>>>>>>> laraxot/dev

curl_close($ch);
