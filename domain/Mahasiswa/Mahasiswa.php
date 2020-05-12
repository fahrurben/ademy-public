<?php
/**
 * Created by PhpStorm.
 * User: fahrur
 * Date: 07/05/20
 * Time: 13:41
 */

namespace Domain\Mahasiswa;

use Gedmo\Mapping\Annotation\SoftDeleteable;
use Doctrine\ORM\Mapping as ORM;
use Domain\AuditableEntity;
use Domain\SoftDeleteEntity;

/**
 * @ORM\Entity(repositoryClass="\Domain\Mahasiswa\Repositories\MahasiswaRepository")
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Table(name="mahasiswa")
 * @SoftDeleteable(fieldName="deletedAt", timeAware=false)
 */
class Mahasiswa
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
    protected $nim;

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

    // Todo: tambahkan jenis kelamin

    /**
     * @ORM\Column(name="tempat_lahir", type="string")
     */
    protected $tempatLahir;

    /**
     * @ORM\Column(name="tanggal_lahir", type="date")
     */
    protected $tanggal_lahir;

    /**
     * @ORM\ManyToOne(targetEntity="\Domain\Institusi\Prodi")
     * @ORM\JoinColumn(name="prodi_id", referencedColumnName="id")
     */
    protected $prodi;

    /**
     * @ORM\ManyToOne(targetEntity="\Domain\Institusi\TahunAjaran")
     * @ORM\JoinColumn(name="tahun_ajaran_masuk_id", referencedColumnName="id")
     */
    protected $tahunAjaranMasuk;

    /**
     * @ORM\Column(name="semester", type="integer")
     */
    protected $semester;

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
    public function getNim()
    {
        return $this->nim;
    }

    /**
     * @param mixed $nim
     */
    public function setNim($nim): void
    {
        $this->nim = $nim;
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
    public function getTahunAjaranMasuk()
    {
        return $this->tahunAjaranMasuk;
    }

    /**
     * @param mixed $tahunAjaranMasuk
     */
    public function setTahunAjaranMasuk($tahunAjaranMasuk): void
    {
        $this->tahunAjaranMasuk = $tahunAjaranMasuk;
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