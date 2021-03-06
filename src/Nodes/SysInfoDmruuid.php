<?php

namespace FSAPI\Nodes;

/**
* SysInfoDmruuid is a class type Node
*
* https://github.com/flammy/fsapi/blob/master/FSAPI.md#netremotesysinfodmruuid
*
* see class Node for details
*
*/
class SysInfoDmruuid extends Node implements Nodes
{
    public function __construct()
    {
        $this->path = 'netRemote.sys.info.dmruuid';
        $this->validation_method = false;
        $this->validation_rules = false;
        $this->call_methods = array('GET');    
        $this->notification = false;
    }
}