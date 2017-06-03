<?php
/**
 * Timewarp
 *
 * @author    Warrick Bayman <me@warrickbayman.co.za>
 * @copyright Copyright (c) THEPUBLICGOOD (Pty) Ltd.
 * @license   MIT License http://opensource.org/licenses/MIT
 *
 */

namespace THEPUBLICGOOD\Timewarp\Components;


use THEPUBLICGOOD\Timewarp\Calendar;
use THEPUBLICGOOD\Timewarp\Exceptions\FailedConformanceTestException;
use THEPUBLICGOOD\Timewarp\Properties\Property;
use THEPUBLICGOOD\Timewarp\Support\CalendarObject;
use THEPUBLICGOOD\Timewarp\Support\Traits\IsDelimited;

/**
 * Class Component
 * @package THEPUBLICGOOD\Timewarp\Components
 */
abstract class Component extends CalendarObject
{
    use IsDelimited;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var Property[]
     */
    protected $properties;

    /**
     * Get the unwrapped content
     *
     * @return string
     */
    protected function unwrapped(): string
    {
        {
            $properties = '';
            foreach ($this->properties as $property) {
                $properties .= $property->contentLine();
            }
            return $properties;
        }
    }

    /**
     * Return the component as a string
     *
     * @return string
     */
    public function toString(): string
    {
        return $this->wrap();
    }

    public function getCalendar(): Calendar
    {
        $calendar = new Calendar();
        $calendar->addComponent($this);
        return $calendar;
    }
}
