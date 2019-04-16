<?php
/**
 * Created by PhpStorm.
 * User: 白猫
 * Date: 2019/4/16
 * Time: 12:04
 */

namespace core\server;

/**
 * 默认的进程实例
 * Class DefaultProcess
 * @package core\server
 */
class DefaultProcess extends Process
{

    public function onProcessStart()
    {
        print_r("[DefaultProcess:{$this->getProcessId()}]\t[{$this->getProcessName()}]\t[onProcessStart]\n");
    }

    public function onProcessStop()
    {
        print_r("[DefaultProcess:{$this->getProcessId()}]\t[{$this->getProcessName()}]\t[onProcessStop]\n");
    }

    public function onPipeMessage(string $message, Process $fromProcess)
    {
        print_r("[DefaultProcess:{$this->getProcessId()}]\t[{$this->getProcessName()}]\t[onPipeMessage]\t[FromProcess:{$fromProcess->getProcessId()}]\t[$message]\n");
    }
}