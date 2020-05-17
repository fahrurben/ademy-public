<?php
/**
 * Created by PhpStorm.
 * User: fahrur
 * Date: 06/05/20
 * Time: 8:09
 */

namespace Domain\Institusi;

use App\Constant;
use Gedmo\Mapping\Annotation\SoftDeleteable;
use Doctrine\ORM\Mapping as ORM;
use Domain\AuditableEntity;
use Domain\SoftDeleteEntity;

/**
 * @ORM\Entity(repositoryClass="\Domain\Institusi\Repositories\TahunAjaranRepository")
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Table(name="tahun_ajaran")
 * @SoftDeleteable(fieldName="deletedAt", timeAware=false)
 */
class TahunAjaran
{
    use AuditableEntity, SoftDeleteEntity;

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $tipe;

    /**
     * @ORM\Column(name="tahun_awal", type="integer")
     */
    protected $tahunAwal;

    /**
     * @ORM\Column(name="tahun_akhir", type="integer")
     */
    protected $tahunAkhir;

    /**
     * @ORM\Column(name="tanggal_pendaftaran_mulai", type="datetime")
     */
    protected $tanggalPendaftaranMulai;

    /**
     * @ORM\Column(name="tanggal_pendaftaran_akhir", type="datetime")
     */
    protected $tanggalPendaftaranAkhir;

    /**
     * @ORM\Column(name="tanggal_aktif", type="datetime")
     */
    protected $tanggalAktif;

    /**
     * @ORM\Column(name="tanggal_selesai", type="datetime")
     */
    protected $tanggalSelesai;

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

    public function getTipeString()
    {
        return Constant::TA_TYPE[$this->tipe] ?? '';
    }

    /**
     * @return mixed
     */
    public function getTahunAwal()
    {
        return $this->tahunAwal;
    }

    /**
     * @param mixed $tahunAwal
     */
    public function setTahunAwal($tahunAwal): void
    {
        $this->tahunAwal = $tahunAwal;
    }

    /**
     * @return mixed
     */
    public function getTahunAkhir()
    {
        return $this->tahunAkhir;
    }

    /**
     * @param mixed $tahunAkhir
     */
    public function setTahunAkhir($tahunAkhir): void
    {
        $this->tahunAkhir = $tahunAkhir;
    }

    /**
     * @return mixed
     */
    public function getTanggalPendaftaranMulai()
    {
        return $this->tanggalPendaftaranMulai;
    }

    /**
     * @param mixed $tanggalPendaftaranMulai
     */
    public function setTanggalPendaftaranMulai($tanggalPendaftaranMulai): void
    {
        $this->tanggalPendaftaranMulai = $tanggalPendaftaranMulai;
    }

    /**
     * @return mixed
     */
    public function getTanggalPendaftaranAkhir()
    {
        return $this->tanggalPendaftaranAkhir;
    }

    /**
     * @param mixed $tanggalPendaftaranAkhir
     */
    public function setTanggalPendaftaranAkhir($tanggalPendaftaranAkhir): void
    {
        $this->tanggalPendaftaranAkhir = $tanggalPendaftaranAkhir;
    }

    /**
     * @return mixed
     */
    public function getTanggalAktif()
    {
        return $this->tanggalAktif;
    }

    /**
     * @param mixed $tanggalAktif
     */
    public function setTanggalAktif($tanggalAktif): void
    {
        $this->tanggalAktif = $tanggalAktif;
    }

    /**
     * @return mixed
     */
    public function getTanggalSelesai()
    {
        return $this->tanggalSelesai;
    }

    /**
     * @param mixed $tanggalSelesai
     */
    public function setTanggalSelesai($tanggalSelesai): void
    {
        $this->tanggalSelesai = $tanggalSelesai;
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

    public function getStatusString()
    {
        return Constant::STATUS_TAHUN_AJARAN[$this->status] ?? '';
    }
}