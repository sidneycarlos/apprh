<?php
use PHPUnit\Framework\TestCase;
/**
 * Description of DAOTest
 *
 * @author loic
 */
class DAOTest extends TestCase{
    protected static $DAOMock;
    /**
     * @before
     */
    public function testConstruction() {
        self::$DAOMock = $this->getMockForAbstractClass(BWB\Framework\mvc\DAO::class);
        
    }
    /**
     * @covers DAO::__Construct
     */
    public function testDAONotNull() {
        $this->assertNotNull(self::$DAOMock);
    }
    
    public function testPDOObjectNotNull() {
        $reflect = new ReflectionClass(self::$DAOMock);
        
        $method = $reflect->getMethod("getPDO");
        $method->setAccessible(true);        
        $pdo = $method->invoke(self::$DAOMock);
        $this->assertNotNull($pdo);
    }
}
