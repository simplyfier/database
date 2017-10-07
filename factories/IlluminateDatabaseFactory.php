<?php
/**
 * StupidlySimple Framework - A PHP Framework For Lazy Developers
 *
 * Copyright (c) 2017 Fariz Luqman
 *
 * Permission is hereby granted, free of charge, to any person obtaining a
 * copy of this software and associated documentation files (the "Software"),
 * to deal in the Software without restriction, including without limitation
 * the rights to use, copy, modify, merge, publish, distribute, sublicense,
 * and/or sell copies of the Software, and to permit persons to whom the
 * Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included
 * in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS
 * OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
 * IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY
 * CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
 * TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
 * SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 * @package     StupidlySimple
 * @author      Fariz Luqman <fariz.fnb@gmail.com>
 * @copyright   2017 Fariz Luqman
 * @license     MIT
 * @link        https://stupidlysimple.github.io/
 */
namespace Simplyfier\Database\Factories;

use Illuminate\Database\Capsule\Manager as Capsule;

/**
 * Class IlluminateDatabaseFactory
 * @package Simplyfier\Database\Factories
 *
 * @since 0.5.0
 */
class IlluminateDatabaseFactory
{
    private static $settings;
    private static $instance;

    /**
     * @param $settings
     *
     * @since 0.5.0
     */
    public static function setSettings($settings)
    {
        self::$settings = $settings;
    }

    /**
     * Create an instance of Illuminate\Database\Capsule\Manager
     * @return Illuminate\Database\Capsule\Manager
     *
     * @since 0.5.0
     */
    public static function createInstance()
    {
        $capsule = new Capsule;
        $capsule->addConnection(self::$settings);
        $capsule->bootEloquent();
        $capsule->setAsGlobal();
        return $capsule;
    }
}