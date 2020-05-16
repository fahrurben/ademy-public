<?php
/**
 * Created by PhpStorm.
 * User: fahrur
 * Date: 16/05/20
 * Time: 11:33
 */

namespace Domain\TahunAjaran;

use Gedmo\Mapping\Annotation\SoftDeleteable;
use Doctrine\ORM\Mapping as ORM;
use Domain\AuditableEntity;
use Domain\SoftDeleteEntity;

/**
 * @ORM\Entity(repositoryClass="\Domain\TahunAjaran\Repositories\KelasTARepository")
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Table(name="kelas_ta")
 * @SoftDeleteable(fieldName="deletedAt", timeAware=false)
 */
class KelasTA
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
     * @ORM\ManyToOne(targetEntity="\Domain\Institusi\MataKuliah")
     * @ORM\JoinColumn(name="matkul_id", referencedColumnName="id")
     */
    protected $mataKuliah;

    /**
     * @ORM\ManyToOne(targetEntity="\Domain\Institusi\TahunAjaran")
     * @ORM\JoinColumn(name="ta_id", referencedColumnName="id")
     */
    protected $tahunAjaran;

    /**
     * @ORM\ManyToOne(targetEntity="\Domain\Institusi\Prodi")
     * @ORM\JoinColumn(name="prodi_id", referencedColumnName="id")
     */
    protected $prodi;

    /**
     * @ORM\ManyToOne(targetEntity="\Domain\Institusi\Dosen")
     * @ORM\JoinColumn(name="dosen_id", referencedColumnName="id")
     */
    protected $dosen;

    /**
     * @ORM\ManyToOne(targetEntity="\Domain\Institusi\Dosen")
     * @ORM\JoinColumn(name="asisten_id", referencedColumnName="id")
     */
    protected $asisten;

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
    public function getMataKuliah()
    {
        return $this->mataKuliah;
    }

    /**
     * @param mixed $mataKuliah
     */
    public function setMataKuliah($mataKuliah): void
    {
        $this->mataKuliah = $mataKuliah;
    }

    /**
     * @return mixed
     */
    public function getTahunAjaran()
    {
        return $this->tahunAjaran;
    }

    /**
     * @param mixed $tahunAjaran
     */
    public function setTahunAjaran($tahunAjaran): void
    {
        $this->tahunAjaran = $tahunAjaran;
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
    public function getDosen()
    {
        return $this->dosen;
    }

    /**
     * @param mixed $dosen
     */
    public function setDosen($dosen): void
    {
        $this->dosen = $dosen;
    }

    /**
     * @return mixed
     */
    public function getAsisten()
    {
        return $this->asisten;
    }

    /**
     * @param mixed $asisten
     */
    public function setAsisten($asisten): void
    {
        $this->asisten = $asisten;
    }

}