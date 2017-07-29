<?php
/**
 * @link http://www.atomframework.net/
 * @copyright Copyright (c) 2017 Safarov Alisher
 * @license https://github.com/atomwares/atom-interfaces/blob/master/LICENSE (MIT License)
 */

namespace Atom\Interfaces;

use Psr\Http\Message\ServerRequestInterface;

/**
 * Interface RouterInterface
 *
 * @package Atom\Interfaces
 */
interface RouterInterface
{
    /**
     * @param ServerRequestInterface $request
     *
     * @return RouteInterface
     */
    public function dispatch(ServerRequestInterface $request);
}
