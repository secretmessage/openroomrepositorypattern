<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Reservationoptions
 *
 * @ORM\Table(name="reservationoptions", indexes={@ORM\Index(name="reservationid", columns={"reservationid"})})
 * @ORM\Entity
 */
class Reservationoptions
{
    /**
     * @var string
     *
     * @ORM\Column(name="optionname", type="string", length=255)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $optionname;

    /**
     * @var integer
     *
     * @ORM\Column(name="reservationid", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $reservationid;

    /**
     * @var string
     *
     * @ORM\Column(name="optionvalue", type="string", length=700, nullable=false)
     */
    private $optionvalue;


    /**
     * Set optionname
     *
     * @param string $optionname
     *
     * @return Reservationoptions
     */
    public function setOptionname($optionname)
    {
        $this->optionname = $optionname;

        return $this;
    }

    /**
     * Get optionname
     *
     * @return string
     */
    public function getOptionname()
    {
        return $this->optionname;
    }

    /**
     * Set reservationid
     *
     * @param integer $reservationid
     *
     * @return Reservationoptions
     */
    public function setReservationid($reservationid)
    {
        $this->reservationid = $reservationid;

        return $this;
    }

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
     * Set optionvalue
     *
     * @param string $optionvalue
     *
     * @return Reservationoptions
     */
    public function setOptionvalue($optionvalue)
    {
        $this->optionvalue = $optionvalue;

        return $this;
    }

    /**
     * Get optionvalue
     *
     * @return string
     */
    public function getOptionvalue()
    {
        return $this->optionvalue;
    }
}

