<?php
/**
 * Created by PhpStorm.
 * User: fahrur
 * Date: 09/05/20
 * Time: 15:33
 */

namespace App\Http\Controllers\Institusi;

use App\Constant;
use App\Helper\FormHelper;
use App\Http\Controllers\Controller;
use Doctrine\ORM\EntityManagerInterface;
use Domain\Institusi\Services\DosenService;
use Domain\Institusi\Services\FakultasService;
use Illuminate\Http\Request;
use Nayjest\Grids\DbalDataProvider;
use Nayjest\Grids\FieldConfig;
use Nayjest\Grids\FilterConfig;
use Nayjest\Grids\Grid;
use Nayjest\Grids\GridConfig;{{  }}
use Nayjest\Grids\ObjectDataRow;
use App\Helper\GridColumnHelper;
use Nayjest\Grids\SelectFilterConfig;

class DosenController extends Controller
{
    private $entityManager;

    private $dosenService;

    private $fakultasService;

    public function __construct(
        EntityManagerInterface $entityManager,
        DosenService $dosenService,
        FakultasService $fakultasService
    )
    {
        $this->entityManager = $entityManager;
        $this->dosenService = $dosenService;
        $this->fakultasService = $fakultasService;
    }

    public function index()
    {
        $getMahasiswaQuery = $this->dosenService->getDosenGridQuery();

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

        // Initialize fakultas filter options
        $fakultasOptions = [];
        $fakultasList = $this->fakultasService->findBy(['deletedAt' => null], ['nama' => 'ASC']);
        foreach ($fakultasList as $fakultas) {
            $fakultasOptions[$fakultas->getId()] = $fakultas->getNama();
        }

        $gridConfig = (new GridConfig())
            ->setName('pageGrid')
            ->setDataProvider(new DbalDataProvider($getMahasiswaQuery))
            ->setColumns([
                GridColumnHelper::generateNumberingViewColumn(),
                GridColumnHelper::generateViewColumn('nid', 'NID', FilterConfig::OPERATOR_LIKE),
                GridColumnHelper::generateViewColumn('nama_lengkap', 'Nama', FilterConfig::OPERATOR_LIKE),
                (new FieldConfig)
                    ->setName('fakultas')
                    ->setLabel('Fakultas')
                    ->addFilter(
                        (new SelectFilterConfig)
                            ->setOperator(FilterConfig::OPERATOR_EQ)
                            ->setName('f.id')
                            ->setOptions($fakultasOptions)
                    )
                    ->setSortable(true),
                (new FieldConfig())
                    ->setName('id')
                    ->setLabel('Action')
                    ->setCallback(function ($val) {
                        if ($val) {
//                            $buttons ='<a href="'.route('mahasiswa.view', ['id' => $val]).'" class="btn btn-xs btn-primary showViewModal"><i class="far fa-file-alt"></i> View</a>';
//                            $buttons .=' <a href="'.route('mahasiswa.update', ['id' => $val]).'"  class="btn btn-xs btn-primary showEditModal"><i class="fas fa-edit"></i> Update</a>';
//                            $buttons .=' <a href="'.route('mahasiswa.delete', ['id' => $val]).'" class="btn btn-xs btn-primary showDeleteModal"><i class="fas fa-trash"></i> Delete</a>';
//                            return $buttons;
                        }
                    })
            ]);
        GridColumnHelper::generateFilterSortingHeader($gridConfig);
        $grid = new Grid($gridConfig);

        return view('page.institusi.dosen.index', compact('grid'));
    }

}