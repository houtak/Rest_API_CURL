<?php

///////////////////////////////////////////////////////////GET////////////////////////////////////////////////////////////////

/*
// create a new cURL resource
$cURLConnection = curl_init();

// set URL
curl_setopt($cURLConnection, CURLOPT_URL, 'http://localhost/rest_api_codeigniter/index.php/api/item/');

// TRUE - will not outputting the return value directly after curl_exec (In this example, save as string at $return_value)
curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

$return_value = curl_exec($cURLConnection);
curl_close($cURLConnection);

//$jsonArrayResponse = json_decode($phoneList);

// No need echo if without CURLOPT_RETURNTRANSFER, then it will outputing directly after curl_exec
echo $return_value;
*/

///////////////////////////////////////////////////////////GET////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////POST////////////////////////////////////////////////////////////////

// CURLOPT_POST: default content type is application/x-www-form-urlencoded 
// (Even POST use form-data, but still works for x-www-form-urlencoded)
// This API cannot POST JSON data

/*
// create a new cURL resource
$cURLConnection = curl_init();

// set URL
curl_setopt($cURLConnection, CURLOPT_URL, 'http://localhost/rest_api_codeigniter/index.php/api/item/');

// Sets the request to be in a post mode.
curl_setopt($cURLConnection, CURLOPT_POST, true);

$postData = array(
  'title' => 'Good',
  'description'  => 'Morning',
);

// Receives the associative array of the fields that we want to post. The array keys are named after the name of the form fields.
curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, $postData);

// TRUE - will not outputting the return value directly after curl_exec (In this example, save as string at $return_value)
curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

// Execute 
$return_value = curl_exec($cURLConnection);

// Close curl connection
curl_close($cURLConnection);

// No need echo if without CURLOPT_RETURNTRANSFER, then it will outputing directly after curl_exec
echo $return_value;
*/

//////////////////////////////////////////////////////////POST////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////POST Ver2/////////////////////////////////////////////////////////////
/*
$data = array('title'=>'dog2','description'=>'tall2');
//$data_json = json_encode($data);
$url = "http://localhost/rest_api_codeigniter/index.php/api/item/";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: multipart/form-data')); // set data type that want to pass
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response  = curl_exec($ch);
curl_close($ch);

echo $response;
*/
////////////////////////////////////////////////////////POST Ver2/////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////POST Ver3/////////////////////////////////////////////////////////////

/*
$handle = curl_init();
 
$url = "http://localhost/rest_api_codeigniter/index.php/api/item/";
 
// Array with the fields names and values.
// The field names should match the field names in the form.
 
$postData = array(
  'title' => 'Lady',
  'description'  => 'Gaga',
);
 
curl_setopt_array($handle,
  array(
     CURLOPT_URL => $url,
     // Enable the post response.
    CURLOPT_POST       => true,
    // The data to transfer with the response.
    CURLOPT_POSTFIELDS => $postData,
    CURLOPT_RETURNTRANSFER     => true,
  )
);
 
$data = curl_exec($handle);
 
curl_close($handle);
 
echo $data;

*/ 

////////////////////////////////////////////////////////POST Ver3/////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////PUT////////////////////////////////////////////////////////////////
/*
$url = "http://localhost/rest_api_codeigniter/index.php/api/item/4";

$data = array('title'=>'dog2','description'=>'tall2');
$data_json = json_encode($data);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
// set data type that want to pass (Content-Length << not neccessary, no put is fine)
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data_json))); 
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT'); 
curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response  = curl_exec($ch);
curl_close($ch);

echo $response;
*/
///////////////////////////////////////////////////////////PUT////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////DELETE//////////////////////////////////////////////////////////////
/*
$url = "http://localhost/rest_api_codeigniter/index.php/api/item/8";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
// set data type that want to pass (Content-Length << not neccessary, no put is fine)
//curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data_json))); 
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE'); 
//curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response  = curl_exec($ch);
curl_close($ch);

echo $response;
*/
///////////////////////////////////////////////////////////DELETE//////////////////////////////////////////////////////////////

