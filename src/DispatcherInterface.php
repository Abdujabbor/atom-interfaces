<?php
/**
 * @link http://www.atomframework.net/
 * @copyright Copyright (c) 2017 Safarov Alisher
 * @license https://github.com/atomwares/atom-interfaces/blob/master/LICENSE (MIT License)
 */

namespace Atom\Interfaces;

use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

/**
 * Interface DispatcherInterface
 *
 * @package Atom\Interfaces
 */
interface DispatcherInterface extends MiddlewareInterface
{
    /**
     * @param MiddlewareInterface|MiddlewareInterface[]|callable|callable[] $middleware
     *
     * @return $this
     */
    public function set($middleware);

    /**
     * @param MiddlewareInterface|MiddlewareInterface[]|callable|callable[] $middleware
     *
     * @return $this
     */
    public function add($middleware);

    /**
     * @param ServerRequestInterface $request
     * @param RequestHandlerInterface $handler
     * @return ResponseInterface
     */
    public function process(ServerRequestInterface $request, RequestHandlerInterface  $handler): ResponseInterface;

    /**
     * @param ServerRequestInterface $request
     * @return ResponseInterface
     */
    public function handle(ServerRequestInterface $request): ResponseInterface;
}
