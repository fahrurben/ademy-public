<?php
/**
 * Created by PhpStorm.
 * User: fahrur
 * Date: 13/05/20
 * Time: 7:06
 */

namespace App\Http\Controllers\Institusi;

use App\Constant;
use App\Helper\FormHelper;
use App\Http\Controllers\Controller;
use Doctrine\ORM\EntityManagerInterface;
use Domain\Institusi\DTOs\MataKuliahDTO;
use Domain\Institusi\Services\MataKuliahService;
use Domain\Institusi\Services\ProdiService;
use Illuminate\Http\Request;
use Nayjest\Grids\DbalDataProvider;
use Nayjest\Grids\FieldConfig;
use Nayjest\Grids\FilterConfig;
use Nayjest\Grids\Grid;
use Nayjest\Grids\GridConfig;
use Nayjest\Grids\ObjectDataRow;
use App\Helper\GridColumnHelper;
use Nayjest\Grids\SelectFilterConfig;

class MataKuliahController extends Controller
{
    private $entityManager;

    private $mataKuliahService;

    private $prodiService;

    public function __construct(
        EntityManagerInterface $entityManager,
        MataKuliahService $mataKuliahService,
        ProdiService $prodiService
    )
    {
        $this->entityManager = $entityManager;
        $this->mataKuliahService = $mataKuliahService;
        $this->prodiService = $prodiService;
    }

    public function index()
    {
        $getMahasiswaQuery = $this->mataKuliahService->getMataKuliahGridQuery();

        // Initialize semster fitler options
        $semesterOptions = [];
        for($i = 1; $i <= Constant::SEMESTER_MAX; $i++) {
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
                GridColumnHelper::generateViewColumn('nama', 'Nama', FilterConfig::OPERATOR_LIKE),
                GridColumnHelper::generateViewColumn('kode', 'Kode', FilterConfig::OPERATOR_LIKE),
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
                    ->setName('tipe')
                    ->setLabel('Tipe')
                    ->addFilter(
                        (new SelectFilterConfig)
                            ->setOperator(FilterConfig::OPERATOR_EQ)
                            ->setName('tipe')
                            ->setOptions(Constant::MATAKULIAH_TYPE)
                    )
                    ->setCallback(function ($val) {
                        return Constant::MATAKULIAH_TYPE[$val] ?? '';
                    })
                    ->setSortable(true),
                GridColumnHelper::generateViewColumn('semester', 'Semster', FilterConfig::OPERATOR_EQ),
                (new FieldConfig)
                    ->setName('status')
                    ->setLabel('Status')
                    ->addFilter(
                        (new SelectFilterConfig)
                            ->setOperator(FilterConfig::OPERATOR_EQ)
                            ->setName('status')
                            ->setOptions(Constant::COMMON_STATUS_TYPE)
                    )
                    ->setCallback(function ($val) {
                        return Constant::COMMON_STATUS_TYPE[$val] ?? '';
                    })
                    ->setSortable(true),
                (new FieldConfig())
                    ->setName('id')
                    ->setLabel('Action')
                    ->setCallback(function ($val) {
                        if ($val) {
                            $buttons ='<a href="'.route('matakuliah.view', ['id' => $val]).'" class="btn btn-xs btn-primary showViewModal"><i class="far fa-file-alt"></i> View</a>';
                            $buttons .=' <a href="'.route('matakuliah.update', ['id' => $val]).'"  class="btn btn-xs btn-primary showEditModal"><i class="fas fa-edit"></i> Update</a>';
                            $buttons .=' <a href="'.route('matakuliah.delete', ['id' => $val]).'" class="btn btn-xs btn-primary showDeleteModal"><i class="fas fa-trash"></i> Delete</a>';
                            return $buttons;
                        }
                    })
            ]);
        GridColumnHelper::generateFilterSortingHeader($gridConfig);
        $grid = new Grid($gridConfig);

        return view('page.institusi.matakuliah.index', compact('grid'));
    }

    public function create(Request $request)
    {
        $arrProdiObj = $this->prodiService->findBy([], ['nama' => 'ASC']);
        $arrProdiOptions = FormHelper::arrayObjToOptionArray($arrProdiObj, __('- Pilih Prodi -'));

        $arrTipeOptions = ['' => __('- Pilih Tipe -')] + Constant::MATAKULIAH_TYPE;
        $arrStatusOptions = ['' => __('- Pilih Status -')] + Constant::COMMON_STATUS_TYPE;

        if ($request->isMethod('get')) {
            return view('page.institusi.matakuliah.create',
                compact('arrProdiOptions', 'arrTipeOptions', 'arrStatusOptions'));
        } else {
            $validator = $this->mataKuliahService->createValidation($request->all());

            if ($validator->fails()) {
                return response()->json(
                    $validator->messages(), 500
                );
            } else {
                try {
                    $matkul = new MataKuliahDTO();
                    $matkul->setAttributesFromRequestArray($request->all());

                    $this->mataKuliahService->create($matkul);
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

    public function update($id, Request $request)
    {
        $mataKuliah = $this->mataKuliahService->find($id);

        $arrProdiObj = $this->prodiService->findBy([], ['nama' => 'ASC']);
        $arrProdiOptions = FormHelper::arrayObjToOptionArray($arrProdiObj, __('- Pilih Prodi -'));

        $arrTipeOptions = ['' => __('- Pilih Tipe -')] + Constant::MATAKULIAH_TYPE;
        $arrStatusOptions = ['' => __('- Pilih Status -')] + Constant::COMMON_STATUS_TYPE;

        if ($request->isMethod('get')) {
            return view('page.institusi.matakuliah.update', compact(
                'arrProdiOptions',
                'arrTipeOptions',
                'arrStatusOptions',
                'mataKuliah'
            ));
        } else {
            try {
                $requestData = $request->all();
                $requestData['id'] = $id;
                $validator = $this->mataKuliahService->updateValidation($requestData, $id);

                if ($validator->fails()) {
                    return response()->json(
                        $validator->messages(), 500
                    );
                } else {
                    $mataKuliah = new MataKuliahDTO();
                    $mataKuliah->setAttributesFromRequestArray($request->all());

                    $this->mataKuliahService->update($mataKuliah, $id);
                }
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

    public function view($id)
    {
        $mataKuliah = $this->mataKuliahService->find($id);

        return view('page.institusi.matakuliah.view', compact('mataKuliah'));
    }

    public function delete($id)
    {
        try {
            $this->mataKuliahService->delete($id);
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