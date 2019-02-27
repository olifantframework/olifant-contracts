<?php
namespace Olifant\Contracts\Http;

use Psr\Http\Message\ServerRequestInterface AS PsrServerRequestInterface;

interface ServerRequestInterface extends PsrServerRequestInterface, CookieRequestInterface
{
	public function isJson();
	public function getJson();
	public function isAjax();
	public function isSecure();

	public function get();
}