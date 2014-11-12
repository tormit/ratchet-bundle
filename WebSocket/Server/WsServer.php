<?php
/**
 * @author Tormi Talv <tormi@insolo.ee> 2014
 * @since 2014-11-12 14:49
 * @version 1.0
 */

namespace P2\Bundle\RatchetBundle\WebSocket\Server;


use Guzzle\Http\Message\RequestInterface;
use Ratchet\ConnectionInterface;

class WsServer extends \Ratchet\WebSocket\WsServer
{
    public function onOpen(ConnectionInterface $conn, RequestInterface $request = null)
    {
        if ($request === null) {
            // $request = ???
        }
        parent::onOpen($conn, $request);
    }
}
