<?php
/**
 * PHP Version 5
 *
 * @package   
 * @author    "Yury Kozyrev" <urakozz@gmail.com>
 * @copyright 2015 "Yury Kozyrev" 
 * @license   MIT
 * @link      https://github.com/urakozz/php-instagram-client
 */

namespace Kozz\Tests;


use Kozz\Laravel\LaravelDoctrineCache;

class LaravelCacheInitTest extends \PHPUnit_Framework_TestCase
{

    public function testLoad()
    {
        $this->assertTrue(class_exists("Kozz\\Laravel\\LaravelDoctrineCache"));
    }
}