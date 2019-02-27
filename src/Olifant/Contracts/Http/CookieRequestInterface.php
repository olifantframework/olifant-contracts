<?php
namespace Olifant\Contracts\Http;

interface CookieRequestInterface extends CookieInterface
{
	public function withCookie($name, $value);
}