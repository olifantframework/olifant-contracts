<?php
namespace Olifant\Contracts\Http;

use Psr\Http\Message\ResponseInterface AS PsrResponseInterface;

interface ResponseInterface extends PsrResponseInterface, CookieResponseInterface
{

}