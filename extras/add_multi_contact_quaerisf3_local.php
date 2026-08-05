<?php

declare(strict_types=1);
error_reporting(E_ALL);
ini_set('display_errors', true);

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/dev
$base_url = 'http://healthcare_appf3.local';
//$base_url = 'https://manager.healthcare_app.it';
$login = '/api/user/login';
$addContact = '/api/healthcare_app/add-contact-multi';
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 2cb7d4f (.)
=======
>>>>>>> 11674ce (.)
$base_url = 'http://quaerisf3.local';
// $base_url = 'https://manager.quaeris.it';
$login = '/api/user/login';
$addContact = '/api/quaeris/add-contact-multi';
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 11674ce (.)
=======
>>>>>>> 2cb7d4f (.)
=======
>>>>>>> 11674ce (.)
>>>>>>> laraxot/dev
$email = 'marco.sottana@gmail.com';
$pass = 'prova123';

$ch = curl_init($base_url.$login);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$post = ['email' => $email, 'password' => $pass];

curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

$response = curl_exec($ch);
<<<<<<< HEAD
//die('<pre>'.print_r($response, true).'<hr>'.curl_error($ch).'</pre>['.__LINE__.']');


$json = json_decode($response);
//die('<pre>'.print_r($response, true).'<hr>'.curl_error($ch).'</pre>['.__LINE__.']');


$data = [
    'a1'=>[
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
//die('<pre>'.print_r($response, true).'<hr>'.curl_error($ch).'</pre>['.__LINE__.']');

=======
// die('<pre>'.print_r($response, true).'<hr>'.curl_error($ch).'</pre>['.__LINE__.']');
>>>>>>> f916df1 (.)

$json = json_decode($response);
// die('<pre>'.print_r($response, true).'<hr>'.curl_error($ch).'</pre>['.__LINE__.']');

$data = [
<<<<<<< HEAD
    'a1'=>[
=======
=======
>>>>>>> 2cb7d4f (.)
=======
>>>>>>> 11674ce (.)
// die('<pre>'.print_r($response, true).'<hr>'.curl_error($ch).'</pre>['.__LINE__.']');

$json = json_decode($response);
// die('<pre>'.print_r($response, true).'<hr>'.curl_error($ch).'</pre>['.__LINE__.']');

$data = [
    'a1' => [
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 11674ce (.)
=======
    'a1' => [
>>>>>>> f916df1 (.)
=======
>>>>>>> 2cb7d4f (.)
=======
>>>>>>> 11674ce (.)
>>>>>>> laraxot/dev
        'survey_pdf_id' => '10',
        'mobile_phone' => '321456789',
        'email' => 'test@email.com',
        'language' => 'it',
        'usesleft' => 1,

        'first_name' => 'Giacomo',
        'last_name' => 'Giocomo',
        'attribute_1' => '123',
        'attribute_2' => '123',
        'attribute_3' => '123',
    ],
<<<<<<< HEAD
    'a2'=>[
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'a2'=>[
=======
    'a2' => [
>>>>>>> 11674ce (.)
=======
    'a2' => [
>>>>>>> f916df1 (.)
=======
    'a2' => [
>>>>>>> 2cb7d4f (.)
=======
    'a2' => [
>>>>>>> 11674ce (.)
>>>>>>> laraxot/dev
        'survey_pdf_id' => '10',
        'mobile_phone' => '321456789',
        'email' => 'aldo@email.com',
        'language' => 'it',
        'usesleft' => 1,
<<<<<<< HEAD
    
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    
=======

>>>>>>> 11674ce (.)
=======

>>>>>>> f916df1 (.)
=======

>>>>>>> 2cb7d4f (.)
=======

>>>>>>> 11674ce (.)
>>>>>>> laraxot/dev
        'first_name' => 'Aldo',
        'last_name' => 'Aldo',
        'attribute_1' => '123',
        'attribute_2' => '123',
        'attribute_3' => '123',
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/dev
    ]
    
    
];

//die(print_r(http_build_query($data),true));
//die('<pre>'.print_r(curl_postfields_flatten($data),true).'</pre>');
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 2cb7d4f (.)
=======
>>>>>>> 11674ce (.)
    ],

];

// die(print_r(http_build_query($data),true));
// die('<pre>'.print_r(curl_postfields_flatten($data),true).'</pre>');
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 11674ce (.)
=======
    ],

];

// die(print_r(http_build_query($data),true));
// die('<pre>'.print_r(curl_postfields_flatten($data),true).'</pre>');
>>>>>>> f916df1 (.)
=======
>>>>>>> 2cb7d4f (.)
=======
>>>>>>> 11674ce (.)
>>>>>>> laraxot/dev

$headers = [
    // 'Content-Type: application/json',  //error
    'Authorization: Bearer '.$json->data->token,
    'Content-type: multipart/form-data',
];

curl_setopt_array($ch, [
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_URL => $base_url.$addContact,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POST => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_VERBOSE => true,
<<<<<<< HEAD
    //CURLOPT_POSTFIELDS => curl_postfields_flatten($data),
    CURLOPT_POSTFIELDS => ['data'=>json_encode($data)],
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    //CURLOPT_POSTFIELDS => curl_postfields_flatten($data),
    CURLOPT_POSTFIELDS => ['data'=>json_encode($data)],
=======
    // CURLOPT_POSTFIELDS => curl_postfields_flatten($data),
    CURLOPT_POSTFIELDS => ['data' => json_encode($data)],
>>>>>>> 11674ce (.)
=======
    // CURLOPT_POSTFIELDS => curl_postfields_flatten($data),
    CURLOPT_POSTFIELDS => ['data' => json_encode($data)],
>>>>>>> f916df1 (.)
=======
    // CURLOPT_POSTFIELDS => curl_postfields_flatten($data),
    CURLOPT_POSTFIELDS => ['data' => json_encode($data)],
>>>>>>> 2cb7d4f (.)
=======
    // CURLOPT_POSTFIELDS => curl_postfields_flatten($data),
    CURLOPT_POSTFIELDS => ['data' => json_encode($data)],
>>>>>>> 11674ce (.)
>>>>>>> laraxot/dev
]);

$response = curl_exec($ch);

// echo htmlspecialchars($response);
// exit('['.__LINE__.']');
echo '<pre>'.print_r($response, true).'</pre>';

curl_close($ch);

<<<<<<< HEAD

function curl_postfields_flatten($data, $prefix = '') {
    if (!is_array($data)) {
      return $data; // in case someone sends an url-encoded string by mistake
    }
  
    $output = array();
    foreach($data as $key => $value) {
      $final_key = $prefix ? "{$prefix}[{$key}]" : $key;
      if (is_array($value)) {
        // @todo: handle name collision here if needed
        $output += curl_postfields_flatten($value, $final_key);
      }
      else {
        $output[$final_key] = $value;
      }
    }
    return $output;
  }
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
function curl_postfields_flatten($data, $prefix = '')
{
    if (! is_array($data)) {
        return $data; // in case someone sends an url-encoded string by mistake
    }
>>>>>>> f916df1 (.)

    $output = [];
    foreach ($data as $key => $value) {
        $final_key = $prefix ? "{$prefix}[{$key}]" : $key;
        if (is_array($value)) {
            // @todo: handle name collision here if needed
            $output += curl_postfields_flatten($value, $final_key);
        } else {
            $output[$final_key] = $value;
        }
    }

    return $output;
<<<<<<< HEAD
  }
=======
=======
>>>>>>> 2cb7d4f (.)
=======
>>>>>>> 11674ce (.)
function curl_postfields_flatten($data, $prefix = '')
{
    if (! is_array($data)) {
        return $data; // in case someone sends an url-encoded string by mistake
    }

    $output = [];
    foreach ($data as $key => $value) {
        $final_key = $prefix ? "{$prefix}[{$key}]" : $key;
        if (is_array($value)) {
            // @todo: handle name collision here if needed
            $output += curl_postfields_flatten($value, $final_key);
        } else {
            $output[$final_key] = $value;
        }
    }

    return $output;
}
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 11674ce (.)
=======
}
>>>>>>> f916df1 (.)
=======
>>>>>>> 2cb7d4f (.)
=======
>>>>>>> 11674ce (.)
>>>>>>> laraxot/dev
