<?php

declare(strict_types=1);
error_reporting(E_ALL);
ini_set('display_errors', true);

<<<<<<< HEAD
$base_url = 'https://manager.healthcare_app.it';
$login = '/api/user/login';
$addContact = '/api/healthcare_app/add-contact-multi';
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
$base_url = 'https://manager.healthcare_app.it';
$login = '/api/user/login';
$addContact = '/api/healthcare_app/add-contact-multi';
=======
$base_url = 'https://manager.quaeris.it';
$login = '/api/user/login';
$addContact = '/api/quaeris/add-contact-multi';
>>>>>>> 11674ce (.)
=======
$base_url = 'https://manager.quaeris.it';
$login = '/api/user/login';
$addContact = '/api/quaeris/add-contact-multi';
>>>>>>> 2cb7d4f (.)
=======
$base_url = 'https://manager.quaeris.it';
$login = '/api/user/login';
$addContact = '/api/quaeris/add-contact-multi';
>>>>>>> 11674ce (.)
>>>>>>> laraxot/dev
$email = 'lfranchini@vivaservizi.it';
$pass = 'franchinivivaservizi123';

$ch = curl_init($base_url.$login);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$post = ['email' => $email, 'password' => $pass];

curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

$response = curl_exec($ch);

$json = json_decode($response);

$data = [
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/dev
    'a1'=>[
      'survey_pdf_id' => '44',
      'email' => 'vair81@gmail.com',
      'mobile_phone' => '',
      'language' => 'it',
      'usesleft' => '1',
  
      'first_name' => '',
      'last_name' => '',
      'attribute_1' => '02.07.2024', // Data cr.
      'attribute_2' => 'ANCONA', // località
      'attribute_3' => '3791339157', // tel. mobile, non prendere in considerazione, utilizzare il campo mobile_phone
      'attribute_4' => 'E-mail', // canale_contatto
      'attribute_5' => 'Variaz. anagrafiche ', // motivo_contatto
      'attribute_6' => '', // Numero telefono
<<<<<<< HEAD
    ],
    'a2'=>[
      'survey_pdf_id' => '44',
      'email' => '',
      'mobile_phone' => '3791339157',
      'language' => 'it',
      'usesleft' => '1',
  
      'first_name' => '',
      'last_name' => '',
      'attribute_1' => '02.07.2024', // Data cr.
      'attribute_2' => 'ANCONA', // località
      'attribute_3' => '3791339157', // tel. mobile, non prendere in considerazione, utilizzare il campo mobile_phone
      'attribute_4' => 'E-mail', // canale_contatto
      'attribute_5' => 'Variaz. anagrafiche ', // motivo_contatto
      'attribute_6' => '', // Numero telefono
=======
=======
    'a1' => [
        'survey_pdf_id' => '44',
        'email' => 'vair81@gmail.com',
        'mobile_phone' => '',
        'language' => 'it',
        'usesleft' => '1',

        'first_name' => '',
        'last_name' => '',
        'attribute_1' => '02.07.2024', // Data cr.
        'attribute_2' => 'ANCONA', // località
        'attribute_3' => '3791339157', // tel. mobile, non prendere in considerazione, utilizzare il campo mobile_phone
        'attribute_4' => 'E-mail', // canale_contatto
        'attribute_5' => 'Variaz. anagrafiche ', // motivo_contatto
        'attribute_6' => '', // Numero telefono
>>>>>>> f916df1 (.)
    ],
    'a2' => [
        'survey_pdf_id' => '44',
        'email' => '',
        'mobile_phone' => '3791339157',
        'language' => 'it',
        'usesleft' => '1',

        'first_name' => '',
        'last_name' => '',
        'attribute_1' => '02.07.2024', // Data cr.
        'attribute_2' => 'ANCONA', // località
        'attribute_3' => '3791339157', // tel. mobile, non prendere in considerazione, utilizzare il campo mobile_phone
        'attribute_4' => 'E-mail', // canale_contatto
        'attribute_5' => 'Variaz. anagrafiche ', // motivo_contatto
        'attribute_6' => '', // Numero telefono
>>>>>>> laraxot/dev
    ],
    // 'a3'=>[
    //   'survey_pdf_id' => '44',
    //   'email' => 'davide.vaira@healthcare_app.it',
    //   'language' => 'it',
    //   'usesleft' => '1',
<<<<<<< HEAD
  
=======
<<<<<<< HEAD
  
=======
=======
>>>>>>> 2cb7d4f (.)
=======
>>>>>>> 11674ce (.)
    'a1' => [
        'survey_pdf_id' => '44',
        'email' => 'vair81@gmail.com',
        'mobile_phone' => '',
        'language' => 'it',
        'usesleft' => '1',

        'first_name' => '',
        'last_name' => '',
        'attribute_1' => '02.07.2024', // Data cr.
        'attribute_2' => 'ANCONA', // località
        'attribute_3' => '3791339157', // tel. mobile, non prendere in considerazione, utilizzare il campo mobile_phone
        'attribute_4' => 'E-mail', // canale_contatto
        'attribute_5' => 'Variaz. anagrafiche ', // motivo_contatto
        'attribute_6' => '', // Numero telefono
    ],
    'a2' => [
        'survey_pdf_id' => '44',
        'email' => '',
        'mobile_phone' => '3791339157',
        'language' => 'it',
        'usesleft' => '1',

        'first_name' => '',
        'last_name' => '',
        'attribute_1' => '02.07.2024', // Data cr.
        'attribute_2' => 'ANCONA', // località
        'attribute_3' => '3791339157', // tel. mobile, non prendere in considerazione, utilizzare il campo mobile_phone
        'attribute_4' => 'E-mail', // canale_contatto
        'attribute_5' => 'Variaz. anagrafiche ', // motivo_contatto
        'attribute_6' => '', // Numero telefono
    ],
    // 'a3'=>[
    //   'survey_pdf_id' => '44',
    //   'email' => 'davide.vaira@quaeris.it',
    //   'language' => 'it',
    //   'usesleft' => '1',

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 11674ce (.)
=======

>>>>>>> f916df1 (.)
=======
>>>>>>> 2cb7d4f (.)
=======
>>>>>>> 11674ce (.)
>>>>>>> laraxot/dev
    //   'first_name' => '',
    //   'last_name' => '',
    //   'attribute_1' => '02.07.2024', // Data cr.
    //   'attribute_2' => 'ANCONA', // località
    //   'attribute_3' => '3791339157', // tel. mobile
    //   'attribute_4' => 'E-mail', // canale_contatto
    //   'attribute_5' => 'Variaz. anagrafiche ', // motivo_contatto
    //   'attribute_6' => '', // Numero telefono
    // ]
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
];

$headers = [
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
    CURLOPT_POSTFIELDS => ['data'=>json_encode($data)],
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    CURLOPT_POSTFIELDS => ['data'=>json_encode($data)],
=======
    CURLOPT_POSTFIELDS => ['data' => json_encode($data)],
>>>>>>> 11674ce (.)
=======
    CURLOPT_POSTFIELDS => ['data' => json_encode($data)],
>>>>>>> f916df1 (.)
=======
    CURLOPT_POSTFIELDS => ['data' => json_encode($data)],
>>>>>>> 2cb7d4f (.)
=======
    CURLOPT_POSTFIELDS => ['data' => json_encode($data)],
>>>>>>> 11674ce (.)
>>>>>>> laraxot/dev
]);

$response = curl_exec($ch);

echo '<pre>'.print_r($response, true).'</pre>';

curl_close($ch);

<<<<<<< HEAD

function curl_postfields_flatten($data, $prefix = '') {
    if (!is_array($data)) {
      return $data;
    }
  
    $output = array();
    foreach($data as $key => $value) {
      $final_key = $prefix ? "{$prefix}[{$key}]" : $key;
      if (is_array($value)) {
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
        return $data;
    }
>>>>>>> f916df1 (.)

    $output = [];
    foreach ($data as $key => $value) {
        $final_key = $prefix ? "{$prefix}[{$key}]" : $key;
        if (is_array($value)) {
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
        return $data;
    }

    $output = [];
    foreach ($data as $key => $value) {
        $final_key = $prefix ? "{$prefix}[{$key}]" : $key;
        if (is_array($value)) {
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
