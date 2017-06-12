<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/06/17
 * Time: 14:55
 */

namespace mikycorp\calendar\Miky\Component\Calendar\Model;


use Miky\Component\Location\Model\LocationInterface;

interface CalendarEventInterface
{
    /**
     * @return string
     */
    public function getTitle(): string;

    /**
     * @param string $title
     */
    public function setTitle(string $title);

    /**
     * @return string
     */
    public function getDescription(): string;

    /**
     * @param string $description
     */
    public function setDescription(string $description);

    /**
     * @return \DateTime
     */
    public function getDateFrom(): \DateTime;

    /**
     * @param \DateTime $dateFrom
     */
    public function setDateFrom(\DateTime $dateFrom);

    /**
     * @return \DateTime
     */
    public function getDateTo(): \DateTime;

    /**
     * @param \DateTime $dateTo
     */
    public function setDateTo(\DateTime $dateTo);

    /**
     * @return LocationInterface
     */
    public function getLocation(): LocationInterface;

    /**
     * @param LocationInterface $location
     */
    public function setLocation(LocationInterface $location);

    /**
     * @return bool
     */
    public function isGlobal(): bool;

    /**
     * @param bool $global
     * @return CalendarEventInterface
     */
    public function setGlobal(bool $global): CalendarEventInterface;
}