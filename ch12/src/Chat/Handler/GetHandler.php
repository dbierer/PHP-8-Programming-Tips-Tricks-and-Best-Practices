<?php
declare(strict_types=1);
namespace Chat\Handler;

use Chat\Generic\Constants;
use Chat\Message\Validate;
use Laminas\Diactoros\Response\JsonResponse;
use Psr\Http\Server\RequestHandlerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

#[Chat\Handler\GetHandler]
class GetHandler implements RequestHandlerInterface
{
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $error = [];
        $data = $request->getQueryParams();
        if (!Validate::validateGet($data, $error)) {
            return (new JsonResponse($error))->withStatus(400);
        }
    }
}
