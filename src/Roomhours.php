<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Roomhours
 *
 * @ORM\Table(name="roomhours")
 * @ORM\Entity
 */
class Roomhours
{
    /**
     * @var integer
     *
     * @ORM\Column(name="roomhoursid", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $roomhoursid;

    /**
     * @var integer
     *
     * @ORM\Column(name="roomid", type="integer", nullable=false)
     */
    private $roomid;

    /**
     * @var integer
     *
     * @ORM\Column(name="dayofweek", type="smallint", nullable=false)
     */
    private $dayofweek;

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
     * Get roomhoursid
     *
     * @return integer
     */
    public function getRoomhoursid()
    {
        return $this->roomhoursid;
    }

    /**
     * Set roomid
     *
     * @param integer $roomid
     *
     * @return Roomhours
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
     * Set dayofweek
     *
     * @param integer $dayofweek
     *
     * @return Roomhours
     */
    public function setDayofweek($dayofweek)
    {
        $this->dayofweek = $dayofweek;

        return $this;
    }

    /**
     * Get dayofweek
     *
     * @return integer
     */
    public function getDayofweek()
    {
        return $this->dayofweek;
    }

    /**
     * Set start
     *
     * @param \DateTime $start
     *
     * @return Roomhours
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
     * @return Roomhours
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

