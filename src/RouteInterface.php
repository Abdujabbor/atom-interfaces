<?php
/**
 * @link http://www.atomframework.net/
 * @copyright Copyright (c) 2017 Safarov Alisher
 * @license https://github.com/atomwares/atom-interfaces/blob/master/LICENSE (MIT License)
 */

namespace Atom\Interfaces;

use Interop\Http\ServerMiddleware\MiddlewareInterface;

/**
 * Interface RouteInterface
 *
 * @package Atom\Interfaces
 */
interface RouteInterface
{
    /**
     * @return MiddlewareInterface|MiddlewareInterface[]|callable|callable[] $handler
     */
    public function getHandlers();
}
