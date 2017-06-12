<?php
/**
 * Created by PhpStorm.
 * User: miky
 * Date: 10/05/17
 * Time: 11:10
 */

namespace Miky\Component\Calendar\Model;


use Miky\Component\Location\Model\LocationInterface;
use mikycorp\calendar\Miky\Component\Calendar\Model\CalendarEventInterface;

class CalendarEvent implements CalendarEventInterface
{
    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var \DateTime
     */
    protected $dateFrom;

    /**
     * @var \DateTime
     */
    protected $dateTo;

    /**
     * @var LocationInterface
     */
    protected $location;

    /**
     * @var boolean
     */
    protected $global;

    /**
     * @var Ca
     */
    protected $calendar;

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return CalendarEventInterface
     */
    public function setTitle(string $title): CalendarEventInterface
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return CalendarEventInterface
     */
    public function setDescription(string $description): CalendarEventInterface
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateFrom(): \DateTime
    {
        return $this->dateFrom;
    }

    /**
     * @param \DateTime $dateFrom
     * @return CalendarEventInterface
     */
    public function setDateFrom(\DateTime $dateFrom): CalendarEventInterface
    {
        $this->dateFrom = $dateFrom;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateTo(): \DateTime
    {
        return $this->dateTo;
    }

    /**
     * @param \DateTime $dateTo
     * @return CalendarEventInterface
     */
    public function setDateTo(\DateTime $dateTo): CalendarEventInterface
    {
        $this->dateTo = $dateTo;
        return $this;
    }

    /**
     * @return LocationInterface
     */
    public function getLocation(): LocationInterface
    {
        return $this->location;
    }

    /**
     * @param LocationInterface $location
     * @return CalendarEventInterface
     */
    public function setLocation(LocationInterface $location): CalendarEventInterface
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @return bool
     */
    public function isGlobal(): bool
    {
        return $this->global;
    }

    /**
     * @param bool $global
     * @return CalendarEventInterface
     */
    public function setGlobal(bool $global): CalendarEventInterface
    {
        $this->global = $global;
        return $this;
    }
}