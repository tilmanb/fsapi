<?php
/**
* SysClockMode is a class type Node
*
* https://github.com/flammy/fsapi/blob/master/FSAPI.md#netremotesysclockmode
*
* see class Node for details
*
*/
class SysClockMode extends Node implements Nodes
{
    public function __construct()
    {
        $this->path = 'netRemote.sys.clock.mode';
        $this->validation_method = false;
        $this->validation_rules = false;
        $this->call_methods = array('SET','GET');    
        $this->notification = false;
    }
}