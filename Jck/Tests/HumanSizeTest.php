<?php
namespace Jck\MediaManagerBundle\Tests\Service;


use Jck\Utilities\HumanSize;

class HumanSizeTest extends \PHPUnit_Framework_TestCase {

    /**
     * @test
     */
    public function convertToKo(){
        $this->assertEquals('1 Ko', HumanSize::render(1000));
        $this->assertEquals('1 Ko', HumanSize::render(1500));
        $this->assertEquals('2 Ko', HumanSize::render(2000));
        $this->assertEquals('2 Ko', HumanSize::render(2500));
        $this->assertEquals('10 Ko', HumanSize::render(10000));
        $this->assertEquals('100 Ko', HumanSize::render(100005));
        $this->assertEquals('690 Ko', HumanSize::render(690005));
        $this->assertEquals('1 Mo', HumanSize::render(1690005));
        $this->assertEquals('15 Mo', HumanSize::render(15690005));
        $this->assertEquals('1 Go', HumanSize::render(1000000000));
        $this->assertEquals('1 To', HumanSize::render(1000000000000));
        $this->assertEquals('1000 To', HumanSize::render(1000000000000000));
    }
} 