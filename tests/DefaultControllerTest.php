<?php
use PHPUnit\Framework\TestCase;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DefaultControllerTest
 *
 * @author loic
 */
class DefaultControllerTest extends TestCase{
    protected static $controller;
    /**
     * @before
     */
    public function load(){
        self::$controller = new BWB\Framework\mvc\controllers\DefaultController();
    }
    public function testNoError(){
        
        $this->assertNotNull(self::$controller);
    }
}
