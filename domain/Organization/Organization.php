<?php
/**
 * Created by PhpStorm.
 * User: fahrur
 * Date: 01/05/20
 * Time: 6:25
 */

namespace Domain\Organization;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping AS ORM;
use Domain\AuditableEntity;

/**
 * @ORM\Entity
 * @ORM\Table(name="organization")
 */
class Organization
{
    use AuditableEntity;

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * @ORM\Column(type="string")
     */
    protected $subdomain;

    /**
     * @OneToMany(targetEntity="\domain\Security\User", mappedBy="organization")
     */
    private $users;


    public function __construct()
    {
        $this->users = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getSubdomain()
    {
        return $this->subdomain;
    }

    /**
     * @param mixed $subdomain
     */
    public function setSubdomain($subdomain): void
    {
        $this->subdomain = $subdomain;
    }

}