<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Rooms
 *
 * @ORM\Table(name="rooms")
 * @ORM\Entity
 */
class Rooms
{
    /**
     * @var integer
     *
     * @ORM\Column(name="roomid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $roomid;

    /**
     * @var string
     *
     * @ORM\Column(name="roomname", type="string", length=255, nullable=false)
     */
    private $roomname;

    /**
     * @var integer
     *
     * @ORM\Column(name="roomposition", type="integer", nullable=false)
     */
    private $roomposition;

    /**
     * @var integer
     *
     * @ORM\Column(name="roomcapacity", type="integer", nullable=false)
     */
    private $roomcapacity;

    /**
     * @var integer
     *
     * @ORM\Column(name="roomgroupid", type="bigint", nullable=false)
     */
    private $roomgroupid;

    /**
     * @var string
     *
     * @ORM\Column(name="roomdescription", type="text", nullable=false)
     */
    private $roomdescription;


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
     * Set roomname
     *
     * @param string $roomname
     *
     * @return Rooms
     */
    public function setRoomname($roomname)
    {
        $this->roomname = $roomname;

        return $this;
    }

    /**
     * Get roomname
     *
     * @return string
     */
    public function getRoomname()
    {
        return $this->roomname;
    }

    /**
     * Set roomposition
     *
     * @param integer $roomposition
     *
     * @return Rooms
     */
    public function setRoomposition($roomposition)
    {
        $this->roomposition = $roomposition;

        return $this;
    }

    /**
     * Get roomposition
     *
     * @return integer
     */
    public function getRoomposition()
    {
        return $this->roomposition;
    }

    /**
     * Set roomcapacity
     *
     * @param integer $roomcapacity
     *
     * @return Rooms
     */
    public function setRoomcapacity($roomcapacity)
    {
        $this->roomcapacity = $roomcapacity;

        return $this;
    }

    /**
     * Get roomcapacity
     *
     * @return integer
     */
    public function getRoomcapacity()
    {
        return $this->roomcapacity;
    }

    /**
     * Set roomgroupid
     *
     * @param integer $roomgroupid
     *
     * @return Rooms
     */
    public function setRoomgroupid($roomgroupid)
    {
        $this->roomgroupid = $roomgroupid;

        return $this;
    }

    /**
     * Get roomgroupid
     *
     * @return integer
     */
    public function getRoomgroupid()
    {
        return $this->roomgroupid;
    }

    /**
     * Set roomdescription
     *
     * @param string $roomdescription
     *
     * @return Rooms
     */
    public function setRoomdescription($roomdescription)
    {
        $this->roomdescription = $roomdescription;

        return $this;
    }

    /**
     * Get roomdescription
     *
     * @return string
     */
    public function getRoomdescription()
    {
        return $this->roomdescription;
    }
}

