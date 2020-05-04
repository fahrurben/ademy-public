<?php
/**
 * Created by PhpStorm.
 * User: fahrur
 * Date: 01/05/20
 * Time: 5:59
 */

namespace Domain\Institusi;

use Gedmo\Mapping\Annotation\SoftDeleteable;
use Doctrine\ORM\Mapping as ORM;
use Domain\AuditableEntity;
use Domain\SoftDeleteEntity;

/**
 * @ORM\Entity(repositoryClass="\Domain\Institusi\Repositories\FakultasRepository")
 * @ORM\Table(name="fakultas")
 * @SoftDeleteable(fieldName="deletedAt", timeAware=false)
 */
class Fakultas
{
    use AuditableEntity, SoftDeleteEntity;

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $nama;

    /**
     * @ORM\Column(type="string")
     */
    protected $kode;

    public function __construct()
    {
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
    public function getNama()
    {
        return $this->nama;
    }

    /**
     * @param mixed $nama
     */
    public function setNama($nama): void
    {
        $this->nama = $nama;
    }

    /**
     * @return mixed
     */
    public function getKode()
    {
        return $this->kode;
    }

    /**
     * @param mixed $kode
     */
    public function setKode($kode): void
    {
        $this->kode = $kode;
    }

}