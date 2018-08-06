<?php
require __DIR__ .'/vendor/autoload.php';
use Lcobucci\JWT\Builder;

$token = (new Builder()) -> setIssuer('http://www.alamin.com')
       	      		 -> setAudience('http://www.anamika.com')
			 -> setId('asdsdfasdfasfsfssdfadfsasd123', true)
			 -> setIssuedAt(time())
			 -> setNotBefore(time() + 60)
			 -> setExpiration(time() + 3600)
			 -> set('uid', 1)
			 -> getToken();

$token->getHeaders();
$token->getClaims();

echo $token->getHeader('jti') . '<br/>';
echo $token->getClaim('iss') . '<br/>';
echo $token->getClaim('uid') . '<br/>';
echo $token;