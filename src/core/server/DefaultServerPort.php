<?php
/**
 * Created by PhpStorm.
 * User: 白猫
 * Date: 2019/4/16
 * Time: 10:23
 */

namespace core\server;


use core\server\beans\Request;
use core\server\beans\Response;
use core\server\beans\WebSocketFrame;

class DefaultServerPort extends ServerPort
{

    public function onTcpConnect(int $fd, int $reactorId)
    {
        print_r("[DefaultServerPort:{$this->getPortConfig()->getPort()}]\t[onTcpConnect]\t[$fd]\n");
    }

    public function onTcpClose(int $fd, int $reactorId)
    {
        print_r("[DefaultServerPort:{$this->getPortConfig()->getPort()}]\t[onTcpClose]\t[$fd]\n");
    }

    public function onTcpReceive(int $fd, int $reactorId, string $data)
    {
        print_r("[DefaultServerPort:{$this->getPortConfig()->getPort()}]\t[onTcpReceive]\t[$fd]\n");
    }

    public function onTcpBufferFull(int $fd)
    {
        print_r("[DefaultServerPort:{$this->getPortConfig()->getPort()}]\t[onTcpBufferFull]\t[$fd]\n");
    }

    public function onTcpBufferEmpty(int $fd)
    {
        print_r("[DefaultServerPort:{$this->getPortConfig()->getPort()}]\t[onTcpBufferEmpty]\t[$fd]\n");
    }

    public function onUdpPacket(string $data, array $client_info)
    {
        print_r("[DefaultServerPort:{$this->getPortConfig()->getPort()}]\t[onUdpPacket]\t[$fd]\n");
    }

    public function onHttpRequest(Request $request, Response $response)
    {
        $response->end("HelloWorld");
        print_r("[DefaultServerPort:{$this->getPortConfig()->getPort()}]\t[onHttpRequest]\t[$fd]\n");
    }

    public function onWsMessage(WebSocketFrame $frame)
    {
        print_r("[DefaultServerPort:{$this->getPortConfig()->getPort()}]\t[onWsMessage]\t[$fd]\n");
    }

    public function onWsOpen(Request $request)
    {
        print_r("[DefaultServerPort:{$this->getPortConfig()->getPort()}]\t[onWsOpen]\t[$fd]\n");
    }

    public function onWsPassCustomHandshake(Request $request): bool
    {
        print_r("[DefaultServerPort:{$this->getPortConfig()->getPort()}]\t[onWsPassCustomHandshake]\t[$fd]\n");
        return true;
    }
}