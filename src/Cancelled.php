<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Cancelled
 *
 * @ORM\Table(name="cancelled")
 * @ORM\Entity
 */
class Cancelled
{
    /**
     * @var integer
     *
     * @ORM\Column(name="reservationid", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $reservationid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="START", type="datetime", nullable=false)
     */
    private $start = '\'0000-00-00 00:00:00\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="END", type="datetime", nullable=false)
     */
    private $end = '\'0000-00-00 00:00:00\'';

    /**
     * @var integer
     *
     * @ORM\Column(name="roomid", type="integer", nullable=false)
     */
    private $roomid;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=false)
     */
    private $username;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timeofrequest", type="datetime", nullable=false)
     */
    private $timeofrequest = '\'0000-00-00 00:00:00\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timeofcancel", type="datetime", nullable=false)
     */
    private $timeofcancel = 'current_timestamp()';


    /**
     * Get reservationid
     *
     * @return integer
     */
    public function getReservationid()
    {
        return $this->reservationid;
    }

    /**
     * Set start
     *
     * @param \DateTime $start
     *
     * @return Cancelled
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
     * @return Cancelled
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

    /**
     * Set roomid
     *
     * @param integer $roomid
     *
     * @return Cancelled
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
     * Set username
     *
     * @param string $username
     *
     * @return Cancelled
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set timeofrequest
     *
     * @param \DateTime $timeofrequest
     *
     * @return Cancelled
     */
    public function setTimeofrequest($timeofrequest)
    {
        $this->timeofrequest = $timeofrequest;

        return $this;
    }

    /**
     * Get timeofrequest
     *
     * @return \DateTime
     */
    public function getTimeofrequest()
    {
        return $this->timeofrequest;
    }

    /**
     * Set timeofcancel
     *
     * @param \DateTime $timeofcancel
     *
     * @return Cancelled
     */
    public function setTimeofcancel($timeofcancel)
    {
        $this->timeofcancel = $timeofcancel;

        return $this;
    }

    /**
     * Get timeofcancel
     *
     * @return \DateTime
     */
    public function getTimeofcancel()
    {
        return $this->timeofcancel;
    }
}

