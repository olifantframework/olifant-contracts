<?php
namespace Olifant\Contracts\Http;

interface CookieInterface
{
	public function getCookie($name);
	public function hasCookie($name);
	public function getAllCookies();
	public function withModifiedCookie($name, callable $call);
	public function withoutCookie($name);
}