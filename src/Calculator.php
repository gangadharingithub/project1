<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



/**
     * @assert (0, 0) == 0
     * @assert (0, 1) == 1
     * @assert (1, 0) == 1
     * @assert (1, 1) == 2
     * @assert (1, 2) == 4
     */

class Calculator
{
    public function __construct() {
        
    }

    public function add($a, $b)
    {       
        return $a + $b;
    }
    
    public function addData(
        $p0, $p1, $p2, $p3, $p4, $p5,
        $p5, $p6, $p7, $p8, $p9, $p10) {        
        
    }
    
    public function add2($a, $b) {
        return $a + $b;
    }
}

