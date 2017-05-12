<?php
/**
 * Created by PhpStorm.
 * User: miky
 * Date: 10/05/17
 * Time: 11:10
 */

namespace Miky\Component\Calendar\Model;


class Event
{
    const TYPE_EVENT = "event";

    const TYPE_SLOT = "slot";

    /**
     * @var string
     */
    protected $name;

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
     * @var string
     */
    protected $type;

    /**
     * @var Agenda
     */
    protected $agenda;

    /**
     * Event constructor.
     */
    public function __construct()
    {
        $this->type = Event::TYPE_EVENT;
    }


    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return Agenda
     */
    public function getAgenda()
    {
        return $this->agenda;
    }

    /**
     * @param Agenda $agenda
     */
    public function setAgenda($agenda)
    {
        $this->agenda = $agenda;
    }

    /**
     * @return \DateTime
     */
    public function getDateFrom()
    {
        return $this->dateFrom;
    }

    /**
     * @param \DateTime $dateFrom
     */
    public function setDateFrom($dateFrom)
    {
        $this->dateFrom = $dateFrom;
    }

    /**
     * @return \DateTime
     */
    public function getDateTo()
    {
        return $this->dateTo;
    }

    /**
     * @param \DateTime $dateTo
     */
    public function setDateTo($dateTo)
    {
        $this->dateTo = $dateTo;
    }
}