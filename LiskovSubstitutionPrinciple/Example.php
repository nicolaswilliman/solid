<?php

namespace Examples;

require '../helper.php';



class Rectangle
{
    /** @var float */
    protected $width;

    /** @var float */
    protected $height;

    public function setHeight(float $height): void
    {
        $this->height = $height;
    }

    public function setWidth(float $width): void
    {
        $this->width = $width;
    }

    public function getArea(): float
    {
        return $this->height * $this->width;
    }
}

class Square extends Rectangle
{
    public function setHeight(float $value): void
    {
        $this->width = $value;
        $this->height = $value;
    }

    public function setWidth(float $value): void
    {
        $this->width = $value;
        $this->height = $value;
    }
}

class RectangleTest
{
    /** @var Rectangle */
    private $rectangle;

    public function __construct(Rectangle $rectangle)
    {
        $this->rectangle = $rectangle;
    }

    public function testArea()
    {
        $this->rectangle->setHeight(4);
        $this->rectangle->setWidth(5);
        if ($this->rectangle->getArea() == 20) {
            logToConsole('Passed!');
        } else {
            logToConsole('It didn\'t passed :(');
        }
    }
}

$rectangle = new Rectangle;
$rectangle_test = new RectangleTest($rectangle);
$rectangle_test->testArea();