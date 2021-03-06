<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Roomgroups
 *
 * @ORM\Table(name="roomgroups")
 * @ORM\Entity
 */
class Roomgroups
{
    /**
     * @var integer
     *
     * @ORM\Column(name="roomgroupid", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $roomgroupid;

    /**
     * @var string
     *
     * @ORM\Column(name="roomgroupname", type="string", length=255, nullable=false)
     */
    private $roomgroupname;


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
     * Set roomgroupname
     *
     * @param string $roomgroupname
     *
     * @return Roomgroups
     */
    public function setRoomgroupname($roomgroupname)
    {
        $this->roomgroupname = $roomgroupname;

        return $this;
    }

    /**
     * Get roomgroupname
     *
     * @return string
     */
    public function getRoomgroupname()
    {
        return $this->roomgroupname;
    }
}

