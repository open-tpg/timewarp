<?php
/**
 * Timewarp
 *
 * @author    Warrick Bayman <me@warrickbayman.co.za>
 * @copyright Copyright (c) THEPUBLICGOOD (Pty) Ltd.
 * @license   MIT License http://opensource.org/licenses/MIT
 *
 */

namespace THEPUBLICGOOD\Timewarp\Properties;


use THEPUBLICGOOD\Timewarp\Calendar;
use THEPUBLICGOOD\Timewarp\Properties\Types\TextProperty;

class Version extends TextProperty
{
    protected $name = 'VERSION';

    protected $conformance = [Calendar::class];
}
