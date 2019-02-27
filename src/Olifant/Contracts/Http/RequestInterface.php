<?php
namespace Olifant\Contracts\Http;

use Psr\Http\Message\RequestInterface AS PsrRequestInterface;

interface RequestInterface extends PsrRequestInterface, CookieRequestInterface
{

}