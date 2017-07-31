<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Bannedusers
 *
 * @ORM\Table(name="bannedusers")
 * @ORM\Entity
 */
class Bannedusers
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

