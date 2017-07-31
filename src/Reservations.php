<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Reservations
 *
 * @ORM\Table(name="reservations")
 * @ORM\Entity
 */
class Reservations
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
     * @var integer
     *
     * @ORM\Column(name="numberingroup", type="integer", nullable=false)
     */
    private $numberingroup;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timeofrequest", type="datetime", nullable=false)
     */
    private $timeofrequest = 'current_timestamp()';


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
     * @return Reservations
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
     * @return Reservations
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
     * @return Reservations
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
     * @return Reservations
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
     * Set numberingroup
     *
     * @param integer $numberingroup
     *
     * @return Reservations
     */
    public function setNumberingroup($numberingroup)
    {
        $this->numberingroup = $numberingroup;

        return $this;
    }

    /**
     * Get numberingroup
     *
     * @return integer
     */
    public function getNumberingroup()
    {
        return $this->numberingroup;
    }

    /**
     * Set timeofrequest
     *
     * @param \DateTime $timeofrequest
     *
     * @return Reservations
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
}

