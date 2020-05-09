<?php
/**
 * Created by PhpStorm.
 * User: fahrur
 * Date: 09/05/20
 * Time: 15:18
 */

namespace Domain\Institusi;

use Gedmo\Mapping\Annotation\SoftDeleteable;
use Doctrine\ORM\Mapping as ORM;
use Domain\AuditableEntity;
use Domain\SoftDeleteEntity;

/**
 * @ORM\Entity(repositoryClass="\Domain\Institusi\Repositories\DosenRepository")
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Table(name="dosen")
 * @SoftDeleteable(fieldName="deletedAt", timeAware=false)
 */
class Dosen
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
    protected $nid;

    /**
     * @ORM\Column(type="string")
     */
    protected $noId;

    /**
     * @ORM\Column(name="nama_depan", type="string")
     */
    protected $namaDepan;

    /**
     * @ORM\Column(name="nama_belakang", type="string")
     */
    protected $namaBelakang;

    /**
     * @ORM\Column(name="nama_lengkap", type="string")
     */
    protected $namaLengkap;

    /**
     * @ORM\Column(name="tempat_lahir", type="string")
     */
    protected $tempatLahir;

    /**
     * @ORM\Column(name="tanggal_lahir", type="date")
     */
    protected $tanggal_lahir;

    /**
     * @ORM\ManyToOne(targetEntity="\Domain\Institusi\Fakultas")
     * @ORM\JoinColumn(name="fakultas_id", referencedColumnName="id")
     */
    protected $fakultas;

    /**
     * @ORM\Column(name="jabatan", type="integer")
     */
    protected $jabatan;

    /**
     * @ORM\Column(name="foto", type="string")
     */
    protected $foto;

    /**
     * @ORM\Column(name="status", type="integer")
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
    public function getNid()
    {
        return $this->nid;
    }

    /**
     * @param mixed $nid
     */
    public function setNid($nid): void
    {
        $this->nid = $nid;
    }

    /**
     * @return mixed
     */
    public function getNoId()
    {
        return $this->noId;
    }

    /**
     * @param mixed $noId
     */
    public function setNoId($noId): void
    {
        $this->noId = $noId;
    }

    /**
     * @return mixed
     */
    public function getNamaDepan()
    {
        return $this->namaDepan;
    }

    /**
     * @param mixed $namaDepan
     */
    public function setNamaDepan($namaDepan): void
    {
        $this->namaDepan = $namaDepan;
    }

    /**
     * @return mixed
     */
    public function getNamaBelakang()
    {
        return $this->namaBelakang;
    }

    /**
     * @param mixed $namaBelakang
     */
    public function setNamaBelakang($namaBelakang): void
    {
        $this->namaBelakang = $namaBelakang;
    }

    /**
     * @return mixed
     */
    public function getNamaLengkap()
    {
        return $this->namaLengkap;
    }

    /**
     * @param mixed $namaLengkap
     */
    public function setNamaLengkap($namaLengkap): void
    {
        $this->namaLengkap = $namaLengkap;
    }

    /**
     * @return mixed
     */
    public function getTempatLahir()
    {
        return $this->tempatLahir;
    }

    /**
     * @param mixed $tempatLahir
     */
    public function setTempatLahir($tempatLahir): void
    {
        $this->tempatLahir = $tempatLahir;
    }

    /**
     * @return mixed
     */
    public function getTanggalLahir()
    {
        return $this->tanggal_lahir;
    }

    /**
     * @param mixed $tanggal_lahir
     */
    public function setTanggalLahir($tanggal_lahir): void
    {
        $this->tanggal_lahir = $tanggal_lahir;
    }

    /**
     * @return mixed
     */
    public function getFakultas()
    {
        return $this->fakultas;
    }

    /**
     * @param mixed $fakultas
     */
    public function setFakultas($fakultas): void
    {
        $this->fakultas = $fakultas;
    }

    /**
     * @return mixed
     */
    public function getJabatan()
    {
        return $this->jabatan;
    }

    /**
     * @param mixed $jabatan
     */
    public function setJabatan($jabatan): void
    {
        $this->jabatan = $jabatan;
    }

    /**
     * @return mixed
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * @param mixed $foto
     */
    public function setFoto($foto): void
    {
        $this->foto = $foto;
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