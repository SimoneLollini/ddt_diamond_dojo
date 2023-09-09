<?php

use PHPUnit\Framework\TestCase;

require "./Class/Diamonds.php";
class DiamondsTest extends TestCase
{
    /**
     * @var Diamonds
     */
    private $diamondClass;

    public function test_A_returns_A()
    {
        $atteso = ["A"];
        $this->assertEquals($atteso, $this->diamondClass->create("A"));
    }

    public function test_b_return_array()
    {
        $atteso = [
            " A",
            "B B",
            " A"
        ];


        $this->assertEquals($atteso, $this->diamondClass->create("B"));
    }

    public function test_c_return_array()
    {
        $atteso = [
            "  A",
            " B B",
            "C   C",
            " B B",
            "  A"
        ];

        $this->assertEquals($atteso, $this->diamondClass->create("c"));
    }

    public function test_d_return_array()
    {
        $atteso = [
            "   A",
            "  B B",
            " C   C",
            "D     D",
            " C   C",
            "  B B",
            "   A"
        ];

        $this->assertEquals($atteso, $this->diamondClass->create("d"));
    }

    public function test_e_return_array()
    {
        $atteso = [
            "    A",
            "   B B",
            "  C   C",
            " D     D",
            "E       E",
            " D     D",
            "  C   C",
            "   B B",
            "    A"
        ];

        $this->assertEquals($atteso, $this->diamondClass->create("e"));
    }

    public function test_z_return_array()
    {
        $atteso = [
            "                         A",
            "                        B B",
            "                       C   C",
            "                      D     D",
            "                     E       E",
            "                    F         F",
            "                   G           G",
            "                  H             H",
            "                 I               I",
            "                J                 J",
            "               K                   K",
            "              L                     L",
            "             M                       M",
            "            N                         N",
            "           O                           O",
            "          P                             P",
            "         Q                               Q",
            "        R                                 R",
            "       S                                   S",
            "      T                                     T",
            "     U                                       U",
            "    V                                         V",
            "   W                                           W",
            "  X                                             X",
            " Y                                               Y",
            "Z                                                 Z",
            " Y                                               Y",
            "  X                                             X",
            "   W                                           W",
            "    V                                         V",
            "     U                                       U",
            "      T                                     T",
            "       S                                   S",
            "        R                                 R",
            "         Q                               Q",
            "          P                             P",
            "           O                           O",
            "            N                         N",
            "             M                       M",
            "              L                     L",
            "               K                   K",
            "                J                 J",
            "                 I               I",
            "                  H             H",
            "                   G           G",
            "                    F         F",
            "                     E       E",
            "                      D     D",
            "                       C   C",
            "                        B B",
            "                         A"
        ];
        $this->assertEquals($atteso, $this->diamondClass->create("z"));
    }

    protected function setUp(): void
    {
        $this->diamondClass = new Diamonds();
    }

    protected function tearDown(): void
    {
        $this->diamondClass = null;
    }
}
