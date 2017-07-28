<?php
/**
 * @link http://www.atomframework.net/
 * @copyright Copyright (c) 2017 Safarov Alisher
 * @license https://github.com/atomwares/atom-interfaces/blob/master/LICENSE (MIT License)
 */

namespace Atom\Interfaces;

use Interop\Http\ServerMiddleware\DelegateInterface;
use Interop\Http\ServerMiddleware\MiddlewareInterface;
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
     * @param DelegateInterface $delegate
     *
     * @return ResponseInterface
     */
    public function process(ServerRequestInterface $request, DelegateInterface $delegate);

    /**
     * @param ServerRequestInterface $request
     *
     * @return ResponseInterface
     */
    public function dispatch(ServerRequestInterface $request);
}
