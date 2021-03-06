<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Optionalfields
 *
 * @ORM\Table(name="optionalfields", uniqueConstraints={@ORM\UniqueConstraint(name="optionformname", columns={"optionformname"})})
 * @ORM\Entity
 */
class Optionalfields
{
    /**
     * @var string
     *
     * @ORM\Column(name="optionname", type="string", length=255)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $optionname;

    /**
     * @var string
     *
     * @ORM\Column(name="optionformname", type="string", length=255, nullable=false)
     */
    private $optionformname;

    /**
     * @var integer
     *
     * @ORM\Column(name="optiontype", type="integer", nullable=false)
     */
    private $optiontype;

    /**
     * @var string
     *
     * @ORM\Column(name="optionchoices", type="string", length=700, nullable=false)
     */
    private $optionchoices;

    /**
     * @var integer
     *
     * @ORM\Column(name="optionorder", type="integer", nullable=false)
     */
    private $optionorder;

    /**
     * @var string
     *
     * @ORM\Column(name="optionquestion", type="string", length=255, nullable=false)
     */
    private $optionquestion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="optionprivate", type="boolean", nullable=false)
     */
    private $optionprivate = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="optionrequired", type="boolean", nullable=false)
     */
    private $optionrequired = '0';


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
     * Set optionformname
     *
     * @param string $optionformname
     *
     * @return Optionalfields
     */
    public function setOptionformname($optionformname)
    {
        $this->optionformname = $optionformname;

        return $this;
    }

    /**
     * Get optionformname
     *
     * @return string
     */
    public function getOptionformname()
    {
        return $this->optionformname;
    }

    /**
     * Set optiontype
     *
     * @param integer $optiontype
     *
     * @return Optionalfields
     */
    public function setOptiontype($optiontype)
    {
        $this->optiontype = $optiontype;

        return $this;
    }

    /**
     * Get optiontype
     *
     * @return integer
     */
    public function getOptiontype()
    {
        return $this->optiontype;
    }

    /**
     * Set optionchoices
     *
     * @param string $optionchoices
     *
     * @return Optionalfields
     */
    public function setOptionchoices($optionchoices)
    {
        $this->optionchoices = $optionchoices;

        return $this;
    }

    /**
     * Get optionchoices
     *
     * @return string
     */
    public function getOptionchoices()
    {
        return $this->optionchoices;
    }

    /**
     * Set optionorder
     *
     * @param integer $optionorder
     *
     * @return Optionalfields
     */
    public function setOptionorder($optionorder)
    {
        $this->optionorder = $optionorder;

        return $this;
    }

    /**
     * Get optionorder
     *
     * @return integer
     */
    public function getOptionorder()
    {
        return $this->optionorder;
    }

    /**
     * Set optionquestion
     *
     * @param string $optionquestion
     *
     * @return Optionalfields
     */
    public function setOptionquestion($optionquestion)
    {
        $this->optionquestion = $optionquestion;

        return $this;
    }

    /**
     * Get optionquestion
     *
     * @return string
     */
    public function getOptionquestion()
    {
        return $this->optionquestion;
    }

    /**
     * Set optionprivate
     *
     * @param boolean $optionprivate
     *
     * @return Optionalfields
     */
    public function setOptionprivate($optionprivate)
    {
        $this->optionprivate = $optionprivate;

        return $this;
    }

    /**
     * Get optionprivate
     *
     * @return boolean
     */
    public function getOptionprivate()
    {
        return $this->optionprivate;
    }

    /**
     * Set optionrequired
     *
     * @param boolean $optionrequired
     *
     * @return Optionalfields
     */
    public function setOptionrequired($optionrequired)
    {
        $this->optionrequired = $optionrequired;

        return $this;
    }

    /**
     * Get optionrequired
     *
     * @return boolean
     */
    public function getOptionrequired()
    {
        return $this->optionrequired;
    }
}

