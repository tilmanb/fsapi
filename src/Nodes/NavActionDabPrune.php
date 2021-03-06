<?php

namespace FSAPI\Nodes;

/**
* NavActionDabPrune is a class type Node
*
* https://github.com/flammy/fsapi/blob/master/FSAPI.md#netremotenavactiondabprune
*
* see class Node for details
*
*/
class NavActionDabPrune extends Node implements Nodes
{
    public function __construct()
    {
        $this->path = 'netRemote.nav.action.dabPrune';
        $this->validation_method = false;
        $this->validation_rules = false;
        $this->call_methods = array('SET','GET');    
        $this->notification = false;
    }
}