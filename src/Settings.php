<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Settings
 *
 * @ORM\Table(name="settings")
 * @ORM\Entity
 */
class Settings
{
    /**
     * @var string
     *
     * @ORM\Column(name="settingname", type="string", length=255)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $settingname;

    /**
     * @var string
     *
     * @ORM\Column(name="settingvalue", type="text", nullable=false)
     */
    private $settingvalue;


    /**
     * Get settingname
     *
     * @return string
     */
    public function getSettingname()
    {
        return $this->settingname;
    }

    /**
     * Set settingvalue
     *
     * @param string $settingvalue
     *
     * @return Settings
     */
    public function setSettingvalue($settingvalue)
    {
        $this->settingvalue = $settingvalue;

        return $this;
    }

    /**
     * Get settingvalue
     *
     * @return string
     */
    public function getSettingvalue()
    {
        return $this->settingvalue;
    }
}

