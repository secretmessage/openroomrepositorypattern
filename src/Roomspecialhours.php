<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Roomspecialhours
 *
 * @ORM\Table(name="roomspecialhours")
 * @ORM\Entity
 */
class Roomspecialhours
{
    /**
     * @var integer
     *
     * @ORM\Column(name="roomspecialhoursid", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $roomspecialhoursid;

    /**
     * @var integer
     *
     * @ORM\Column(name="roomid", type="integer", nullable=false)
     */
    private $roomid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fromrange", type="datetime", nullable=false)
     */
    private $fromrange = '\'0000-00-00 00:00:00\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="torange", type="datetime", nullable=false)
     */
    private $torange = '\'0000-00-00 00:00:00\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="START", type="time", nullable=false)
     */
    private $start;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="END", type="time", nullable=false)
     */
    private $end;


    /**
     * Get roomspecialhoursid
     *
     * @return integer
     */
    public function getRoomspecialhoursid()
    {
        return $this->roomspecialhoursid;
    }

    /**
     * Set roomid
     *
     * @param integer $roomid
     *
     * @return Roomspecialhours
     */
    public function setRoomid($roomid)
    {
        $this->roomid = $roomid;

        return $this;
    }

    /**
     * Get roomid
     *
     * @return integer
     */
    public function getRoomid()
    {
        return $this->roomid;
    }

    /**
     * Set fromrange
     *
     * @param \DateTime $fromrange
     *
     * @return Roomspecialhours
     */
    public function setFromrange($fromrange)
    {
        $this->fromrange = $fromrange;

        return $this;
    }

    /**
     * Get fromrange
     *
     * @return \DateTime
     */
    public function getFromrange()
    {
        return $this->fromrange;
    }

    /**
     * Set torange
     *
     * @param \DateTime $torange
     *
     * @return Roomspecialhours
     */
    public function setTorange($torange)
    {
        $this->torange = $torange;

        return $this;
    }

    /**
     * Get torange
     *
     * @return \DateTime
     */
    public function getTorange()
    {
        return $this->torange;
    }

    /**
     * Set start
     *
     * @param \DateTime $start
     *
     * @return Roomspecialhours
     */
    public function setStart($start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Get start
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Set end
     *
     * @param \DateTime $end
     *
     * @return Roomspecialhours
     */
    public function setEnd($end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Get end
     *
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }
}

