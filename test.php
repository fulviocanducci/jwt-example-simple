<?php
use \Firebase\JWT\JWT;

require 'vendor/autoload.php';
$datetime = new \DateTime("now");
$key = "example_keyajfalskjflasjflçasjflasjfçlasjfalfjaçsdlçaae66434sfasfdas@@";
$payload = array(
    "iss" => "http://example.org",
    "aud" => "http://example.com",
    'iat' => $datetime->getTimestamp(),
    'exp' => $datetime->add(new DateInterval("P1D")) ->getTimestamp(),
    "sub" => 1,
);

print $jwt = JWT::encode($payload, $key);