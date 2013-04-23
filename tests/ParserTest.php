<?php

require_once __DIR__ . '/../src/Parser.php';

use Kata\Parser;

class parserTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider provideEntryString
     */
    public function testParse($entryString, $expectedResult)
    {
        $parser = new Parser($entryString);
        $this->assertEquals($expectedResult, $parser->parse());
    }

    /**
     * TODO tocca trovare dei numeri validi/non validi
     * @dataProvider provideEntriesToValidate
     */
    public function testValidate($entryString, $expectedResult)
    {
        $parser = new Parser($entryString);
        $this->assertEquals($expectedResult, $parser->validate());
    }

    // ---------------- data providers ------------------

    /**
     * @return array
     */
    public function provideEntryString()
    {
        return array(
            array(
<<<PHP
 _  _  _  _  _  _  _  _  _
| || || || || || || || || |
|_||_||_||_||_||_||_||_||_|

PHP
                , '000000000'
            ),
            array(
<<<PHP

  |  |  |  |  |  |  |  |  |
  |  |  |  |  |  |  |  |  |

PHP
                , '111111111'
            ),
            array(
<<<PHP
 _  _  _  _  _  _  _  _  _
 _| _| _| _| _| _| _| _| _|
|_ |_ |_ |_ |_ |_ |_ |_ |_

PHP
                , '222222222'
            ),
            array(
<<<PHP
 _  _  _  _  _  _  _  _  _
 _| _| _| _| _| _| _| _| _|
 _| _| _| _| _| _| _| _| _|

PHP
                , '333333333'
            ),
            array(
<<<PHP

|_||_||_||_||_||_||_||_||_|
  |  |  |  |  |  |  |  |  |

PHP
                , '444444444'
            ),
            array(
<<<PHP
 _  _  _  _  _  _  _  _  _
|_ |_ |_ |_ |_ |_ |_ |_ |_
 _| _| _| _| _| _| _| _| _|

PHP
                , '555555555'
            ),
            array(
<<<PHP
 _  _  _  _  _  _  _  _  _
|_ |_ |_ |_ |_ |_ |_ |_ |_
|_||_||_||_||_||_||_||_||_|

PHP
                , '666666666'
            ),
            array(
<<<PHP
 _  _  _  _  _  _  _  _  _
  |  |  |  |  |  |  |  |  |
  |  |  |  |  |  |  |  |  |

PHP
                , '777777777'
            ),
            array(
<<<PHP
 _  _  _  _  _  _  _  _  _
|_||_||_||_||_||_||_||_||_|
|_||_||_||_||_||_||_||_||_|

PHP
                , '888888888'
            ),
            array(
    <<<PHP
 _  _  _  _  _  _  _  _  _
|_||_||_||_||_||_||_||_||_|
 _| _| _| _| _| _| _| _| _|

PHP
                , '999999999'
            ),
            array(
<<<PHP
    _  _     _  _  _  _  _
  | _| _||_||_ |_   ||_||_|
  ||_  _|  | _||_|  ||_| _|

PHP
                , '123456789'
            ),
        );
    }

    /**
     * @return array
     */
    public function provideEntriesToValidate()
    {
        return array(
            array(
<<<PHP
 _  _  _  _  _  _  _  _
| || || || || || || ||_   |
|_||_||_||_||_||_||_| _|  |

PHP
                , '000000051'
            ),
            array(
<<<PHP
    _  _  _  _  _  _     _
|_||_|| || ||_   |  |  | _
  | _||_||_||_|  |  |  | _|


PHP
                , '49006771? ILL'
            ),
            array(
<<<PHP
    _  _     _  _  _  _  _
  | _| _||_| _ |_   ||_||_|
  ||_  _|  | _||_|  ||_| _

PHP
                , '1234?678? ILL'
            ),
            array(
                <<<PHP
 _  _     _  _         _   _
|_ |_ |_| _|  | | |_| |_| |_
|_||_|  | _|  | |   |  _|  _|

PHP
            , '664371495 ERR'
            ),
        );
    }

}
