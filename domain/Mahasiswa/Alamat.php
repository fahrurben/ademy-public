<?php
/**
 * Created by PhpStorm.
 * User: fahrur
 * Date: 15/05/20
 * Time: 7:47
 */

namespace Domain\Mahasiswa;

use App\Helper\RegionLookupHelper;
use Gedmo\Mapping\Annotation\SoftDeleteable;
use Doctrine\ORM\Mapping as ORM;
use Domain\AuditableEntity;
use Domain\SoftDeleteEntity;
use Illuminate\Support\Collection;

/**
 * @ORM\Entity(repositoryClass="\Domain\Mahasiswa\Repositories\AlamatRepository")
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Table(name="alamat")
 */
class Alamat
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $alamat;

    /**
     * @ORM\Column(type="integer")
     */
    protected $provinsi;

    /**
     * @ORM\Column(type="integer")
     */
    protected $kota;

    /**
     * @ORM\Column(name="kode_pos", type="string")
     */
    protected $kodePos;

    /**
     * @ORM\Column(type="string")
     */
    protected $telepon;


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
    public function getAlamat()
    {
        return $this->alamat;
    }

    /**
     * @param mixed $alamat
     */
    public function setAlamat($alamat): void
    {
        $this->alamat = $alamat;
    }

    /**
     * @return mixed
     */
    public function getProvinsi()
    {
        return $this->provinsi;
    }

    public function getProvinsiName()
    {
        $provinsi = collect(RegionLookupHelper::PROVINCE)->first(
            function ($value) {
                return $value['id'] == $this->provinsi;
            }
        );
        return $provinsi['name'] ?? '';
    }

    /**
     * @param mixed $provinsi
     */
    public function setProvinsi($provinsi): void
    {
        $this->provinsi = $provinsi;
    }

    /**
     * @return mixed
     */
    public function getKota()
    {
        return $this->kota;
    }

    public function getKotaName()
    {
        $kota = collect(RegionLookupHelper::CITY)->first(
            function ($value) {
                return $value['id'] == $this->kota;
            }
        );
        return $kota['name'] ?? '';
    }

    /**
     * @param mixed $kota
     */
    public function setKota($kota): void
    {
        $this->kota = $kota;
    }

    /**
     * @return mixed
     */
    public function getKodePos()
    {
        return $this->kodePos;
    }

    /**
     * @param mixed $kodePos
     */
    public function setKodePos($kodePos): void
    {
        $this->kodePos = $kodePos;
    }

    /**
     * @return mixed
     */
    public function getTelepon()
    {
        return $this->telepon;
    }

    /**
     * @param mixed $telepon
     */
    public function setTelepon($telepon): void
    {
        $this->telepon = $telepon;
    }

}