<?php

    namespace AppBundle\Entity;

    use FOS\UserBundle\Model\User as BaseUser;
    use Doctrine\ORM\Mapping as ORM;
    
/**
 * @ORM\Table(name="admin")
 * @ORM\Entity
 */
class Admin extends BaseUser
{
    
    /**
     * @ORM\Column(name="id_admin",type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=200)
     */
    protected $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="mot_de_passe", type="string", length=120)
     */
    protected $pwd;

    public function __construct(){
        parent::__construct();
    }



    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Admin
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set pwd
     *
     * @param string $pwd
     *
     * @return Admin
     */
    public function setPwd($pwd)
    {
        $this->pwd = $pwd;

        return $this;
    }

    /**
     * Get pwd
     *
     * @return string
     */
    public function getPwd()
    {
        return $this->pwd;
    }
}
