<?php
use PHPUnit\Framework\TestCase;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RoutingTest
 *
 * @author loic
 */
class RoutingTest extends TestCase{
    protected $routing;
    
    /**
     * @before
     */
    public function testConstruct() {
        $this->routing = new BWB\Framework\mvc\Routing();
    }
    public function testConfigAsArray() {
        $_SERVER['DOCUMENT_ROOT'] = "coco";
        $reflec = new ReflectionClass($this->routing);
        $config = $reflec->getProperty("config");
        $config->setAccessible(true);
        $this->assertNotNull($config->getValue($this->routing));
    }
}
