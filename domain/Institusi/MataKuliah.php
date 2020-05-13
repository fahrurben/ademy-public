<?php
/**
 * Created by PhpStorm.
 * User: fahrur
 * Date: 13/05/20
 * Time: 6:57
 */

namespace Domain\Institusi;

use Gedmo\Mapping\Annotation\SoftDeleteable;
use Doctrine\ORM\Mapping as ORM;
use Domain\AuditableEntity;
use Domain\SoftDeleteEntity;

/**
 * @ORM\Entity(repositoryClass="\Domain\Institusi\Repositories\MataKuliahRepository")
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Table(name="mata_kuliah")
 * @SoftDeleteable(fieldName="deletedAt", timeAware=false)
 */
class MataKuliah
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

    /**
     * @ORM\Column(type="integer")
     */
    protected $tipe;

    /**
     * @ORM\ManyToOne(targetEntity="\Domain\Institusi\Prodi")
     * @ORM\JoinColumn(name="prodi_id", referencedColumnName="id")
     */
    protected $prodi;

    /**
     * @ORM\Column(type="integer")
     */
    protected $bobot;

    /**
     * @ORM\Column(type="integer")
     */
    protected $semester;

    /**
     * @ORM\Column(type="string")
     */
    protected $deskripsi;

    /**
     * @ORM\Column(type="integer")
     */
    protected $status;

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

    /**
     * @return mixed
     */
    public function getTipe()
    {
        return $this->tipe;
    }

    /**
     * @param mixed $tipe
     */
    public function setTipe($tipe): void
    {
        $this->tipe = $tipe;
    }

    /**
     * @return mixed
     */
    public function getProdi()
    {
        return $this->prodi;
    }

    /**
     * @param mixed $prodi
     */
    public function setProdi($prodi): void
    {
        $this->prodi = $prodi;
    }

    /**
     * @return mixed
     */
    public function getBobot()
    {
        return $this->bobot;
    }

    /**
     * @param mixed $bobot
     */
    public function setBobot($bobot): void
    {
        $this->bobot = $bobot;
    }

    /**
     * @return mixed
     */
    public function getSemester()
    {
        return $this->semester;
    }

    /**
     * @param mixed $semester
     */
    public function setSemester($semester): void
    {
        $this->semester = $semester;
    }

    /**
     * @return mixed
     */
    public function getDeskripsi()
    {
        return $this->deskripsi;
    }

    /**
     * @param mixed $deskripsi
     */
    public function setDeskripsi($deskripsi): void
    {
        $this->deskripsi = $deskripsi;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status): void
    {
        $this->status = $status;
    }
}