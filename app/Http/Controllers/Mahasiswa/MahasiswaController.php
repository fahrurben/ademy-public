<?php
/**
 * Created by PhpStorm.
 * User: fahrur
 * Date: 07/05/20
 * Time: 14:24
 */

namespace App\Http\Controllers\Mahasiswa;

use App\Constant;
use App\Helper\FormHelper;
use App\Http\Controllers\Controller;
use Doctrine\ORM\EntityManagerInterface;
use Domain\Institusi\Services\ProdiService;
use Domain\Institusi\Services\TahunAjaranService;
use Domain\Mahasiswa\DTOs\MahasiswaDTO;
use Domain\Mahasiswa\Services\MahasiswaService;
use Illuminate\Http\Request;
use Nayjest\Grids\DbalDataProvider;
use Nayjest\Grids\FieldConfig;
use Nayjest\Grids\FilterConfig;
use Nayjest\Grids\Grid;
use Nayjest\Grids\GridConfig;{{  }}
use Nayjest\Grids\ObjectDataRow;
use App\Helper\GridColumnHelper;
use Nayjest\Grids\SelectFilterConfig;

class MahasiswaController extends Controller
{
    private $entityManager;

    private $mahasiswaService;

    private $prodiService;

    private $tahunAjaranService;

    public function __construct(
        EntityManagerInterface $entityManager,
        MahasiswaService $mahasiswaService,
        ProdiService $prodiService,
        TahunAjaranService $tahunAjaranService
    )
    {
        $this->entityManager = $entityManager;
        $this->mahasiswaService = $mahasiswaService;
        $this->prodiService = $prodiService;
        $this->tahunAjaranService = $tahunAjaranService;
    }

    public function index()
    {
        $getMahasiswaQuery = $this->mahasiswaService->getMahasiswaGridQuery();

        // Initialize tahun masuk fitler options
        $tahunMasukOptions = [];
        for($i = Constant::TAHUN_START; $i <= Constant::TAHUN_END; $i++) {
            $tahunMasukOptions[$i] = $i;
        }

        // Initialize semster fitler options
        $semesterOptions = [];
        for($i = 1; $i <= 20; $i++) {
            $semesterOptions[$i] = $i;
        }

        // Initialize prodi filter options
        $prodiOptions = [];
        $prodiList = $this->prodiService->findBy(['deletedAt' => null], ['nama' => 'ASC']);
        foreach ($prodiList as $prodi) {
            $prodiOptions[$prodi->getId()] = $prodi->getNama();
        }

        $gridConfig = (new GridConfig())
                ->setName('pageGrid')
                ->setDataProvider(new DbalDataProvider($getMahasiswaQuery))
                ->setColumns([
                    GridColumnHelper::generateNumberingViewColumn(),
                    GridColumnHelper::generateViewColumn('nim', 'NIM', FilterConfig::OPERATOR_LIKE),
                    GridColumnHelper::generateViewColumn('nama_lengkap', 'Nama', FilterConfig::OPERATOR_LIKE),
                    (new FieldConfig)
                        ->setName('prodi')
                        ->setLabel('Prodi')
                        ->addFilter(
                            (new SelectFilterConfig)
                                ->setOperator(FilterConfig::OPERATOR_EQ)
                                ->setName('p.id')
                                ->setOptions($prodiOptions)
                        )
                        ->setSortable(true),
                    (new FieldConfig)
                        ->setName('tahun_awal')
                        ->setLabel('Tahun Masuk')
                        ->addFilter(
                            (new SelectFilterConfig)
                                ->setOperator(FilterConfig::OPERATOR_EQ)
                                ->setName('tahun_awal')
                                ->setOptions($tahunMasukOptions)
                        )
                        ->setSortable(true),
                    (new FieldConfig)
                        ->setName('semester')
                        ->setLabel('Semester')
                        ->addFilter(
                            (new SelectFilterConfig)
                                ->setOperator(FilterConfig::OPERATOR_EQ)
                                ->setName('semester')
                                ->setOptions($semesterOptions)
                        )
                        ->setSortable(true),
                    (new FieldConfig())
                        ->setName('id')
                        ->setLabel('Action')
                        ->setCallback(function ($val) {
                            if ($val) {
//                                $buttons ='<a href="'.route('fakultas.view', ['id' => $val]).'" class="btn btn-xs btn-primary showViewModal"><i class="far fa-file-alt"></i> View</a>';
//                                $buttons .=' <a href="'.route('fakultas.update', ['id' => $val]).'"  class="btn btn-xs btn-primary showEditModal"><i class="fas fa-edit"></i> Update</a>';
//                                $buttons .=' <a href="'.route('fakultas.delete', ['id' => $val]).'" class="btn btn-xs btn-primary showDeleteModal"><i class="fas fa-trash"></i> Delete</a>';
                                return '';
                            }
                        })
                ]);
        GridColumnHelper::generateFilterSortingHeader($gridConfig);
        $grid = new Grid($gridConfig);

        return view('page.mahasiswa.mahasiswa.index', compact('grid'));
    }

    public function create(Request $request)
    {
        $arrProdiObj = $this->prodiService->findBy([], ['nama' => 'ASC']);
        $arrProdiOptions = FormHelper::arrayObjToOptionArray($arrProdiObj, __('- Pilih Prodi -'));

        $tahunAjaranLabelFunc = fn($obj) => ($obj->getTipe() == 1 ? 'Ganjil' : 'Genap').' : '.$obj->getTahunAwal().' - '.$obj->getTahunAkhir();
        $arrTahunAjaranObj = $this->tahunAjaranService->findBy([], ['tahunAwal' => 'ASC']);
        $arrTahunAjaranOptions = FormHelper::arrayObjToOptionArray($arrTahunAjaranObj, __('- Pilih Tahun Ajaran -'), null, $tahunAjaranLabelFunc);

        if ($request->isMethod('get')) {
            return view('page.mahasiswa.mahasiswa.create', compact('arrProdiOptions', 'arrTahunAjaranOptions'));
        } else {
            $validator = $this->mahasiswaService->createValidation($request->all());

            if ($validator->fails()) {
                return response()->json(
                    $validator->messages(), 500
                );
            } else {
                try {
                    $mahasiswa = new MahasiswaDTO();
                    $mahasiswa->setAttributesFromRequestArray($request->all());
                    $mahasiswa->setTanggalLahirFromLocale($mahasiswa->tanggalLahir);

                    $this->mahasiswaService->create($mahasiswa);
                } catch (\Exception $e) {
                    return response()->json(
                        ['message' => $e->getMessage()], 500
                    );
                }

                return response()->json(
                    ['success' => true]
                );
            }
        }
    }
}