<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Administrators
 *
 * @ORM\Table(name="administrators")
 * @ORM\Entity
 */
class Administrators
{
    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $username;


    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }
}

