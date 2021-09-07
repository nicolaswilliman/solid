<?php

namespace Corrections;

require '../helper.php';

class Rectangle
{
    public function __construct(
        protected float $height,
        protected float $width,
    ) {
    }

    public function getArea(): float
    {
        return $this->height * $this->width;
    }
}

class Square extends Rectangle
{
    public function __construct(float $length)
    {
        $this->height = $length;
        $this->width = $length;
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
        if ($this->rectangle->getArea() == 20) {
            logToConsole('Passed!');
        } else {
            logToConsole('It didn\'t passed :(');
        }
    }
}

$rectangle = new Square(4);
$rectangle_test = new RectangleTest($rectangle);
$rectangle_test->testArea();
