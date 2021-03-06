<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Deletedrooms
 *
 * @ORM\Table(name="deletedrooms")
 * @ORM\Entity
 */
class Deletedrooms
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
     * @return Deletedrooms
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
     * Set roomcapacity
     *
     * @param integer $roomcapacity
     *
     * @return Deletedrooms
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
     * @return Deletedrooms
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
     * @return Deletedrooms
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

