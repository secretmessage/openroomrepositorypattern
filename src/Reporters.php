<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Reporters
 *
 * @ORM\Table(name="reporters")
 * @ORM\Entity
 */
class Reporters
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

