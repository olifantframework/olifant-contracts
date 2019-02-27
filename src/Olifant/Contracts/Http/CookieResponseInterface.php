<?php
namespace Olifant\Contracts\Http;

interface CookieResponseInterface extends CookieInterface
{
	public function withCookie($name, $value, array $options = []);
	public function withForgetCookie($name);
}