<?php
/**
 * Created by PhpStorm.
 * User: fahrur
 * Date: 16/05/20
 * Time: 13:07
 */

namespace App\Http\Controllers\TahunAjaran;

use App\Constant;
use App\Helper\FormHelper;
use App\Http\Controllers\Controller;
use Doctrine\ORM\EntityManagerInterface;
use Domain\Institusi\Services\DosenService;
use Domain\Institusi\Services\MataKuliahService;
use Domain\Institusi\Services\ProdiService;
use Domain\Institusi\Services\TahunAjaranService;
use Domain\TahunAjaran\DTOs\KelasTADTO;
use Domain\TahunAjaran\Services\KelasTAService;
use Illuminate\Http\Request;
use Nayjest\Grids\DbalDataProvider;
use Nayjest\Grids\FieldConfig;
use Nayjest\Grids\FilterConfig;
use Nayjest\Grids\Grid;
use Nayjest\Grids\GridConfig;
use Nayjest\Grids\ObjectDataRow;
use App\Helper\GridColumnHelper;
use Nayjest\Grids\SelectFilterConfig;

class KelasTAController extends Controller
{
    private $entityManager;

    private $kelasTAService;

    private $tahunAjaranService;

    private $prodiService;

    private $mataKuliahService;

    private $dosenService;

    public function __construct(
        EntityManagerInterface $entityManager,
        KelasTAService $kelasTAService,
        TahunAjaranService $tahunAjaranService,
        ProdiService $prodiService,
        MataKuliahService $mataKuliahService,
        DosenService $dosenService
    )
    {
        $this->entityManager = $entityManager;
        $this->kelasTAService = $kelasTAService;
        $this->tahunAjaranService = $tahunAjaranService;
        $this->prodiService = $prodiService;
        $this->mataKuliahService = $mataKuliahService;
        $this->dosenService = $dosenService;
    }

    public function index($id)
    {
        $tahunAjaran = $this->tahunAjaranService->find($id);
        $tahunAjaranOptions = $this->tahunAjaranService->findBy([], ['tahunAwal' => 'DESC', 'tipe' => 'ASC']);

        $getKelasQuery = $this->kelasTAService->getKelasGridQuery($id);

        // Initialize prodi filter options
        $arrProdiObj = $this->prodiService->findBy([], ['nama' => 'ASC']);
        $prodiOptions = FormHelper::arrayObjToOptionArray($arrProdiObj);

        $arrMatkulObj = $this->mataKuliahService->findBy([], ['nama' => 'ASC']);
        $matkulOptions = FormHelper::arrayObjToOptionArray($arrMatkulObj);

        $arrDosenObj = $this->dosenService->findBy([], ['namaLengkap' => 'ASC']);
        $dosenOptions = FormHelper::arrayObjToOptionArray($arrDosenObj, null, 'namaLengkap');

        $gridConfig = (new GridConfig())
            ->setName('pageGrid')
            ->setDataProvider(new DbalDataProvider($getKelasQuery))
            ->setColumns([
                GridColumnHelper::generateNumberingViewColumn(),
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
                    ->setName('matakuliah')
                    ->setLabel('Mata Kuliah')
                    ->addFilter(
                        (new SelectFilterConfig)
                            ->setOperator(FilterConfig::OPERATOR_EQ)
                            ->setName('m.id')
                            ->setOptions($matkulOptions)
                    )
                    ->setSortable(true),
                (new FieldConfig)
                    ->setName('dosen')
                    ->setLabel('Dosen')
                    ->addFilter(
                        (new SelectFilterConfig)
                            ->setOperator(FilterConfig::OPERATOR_EQ)
                            ->setName('d.id')
                            ->setOptions($dosenOptions)
                    )
                    ->setSortable(true),
                (new FieldConfig())
                    ->setName('id')
                    ->setLabel('Action')
                    ->setCallback(function ($val) {
                        if ($val) {
                            $buttons ='<a href="'.route('kelasta.view', ['id' => $val]).'" class="btn btn-xs btn-primary showViewModal"><i class="far fa-file-alt"></i> View</a>';
                            $buttons .=' <a href="'.route('kelasta.update', ['id' => $val]).'"  class="btn btn-xs btn-primary showEditModal"><i class="fas fa-edit"></i> Update</a>';
//                            $buttons .=' <a href="'.route('mahasiswa.delete', ['id' => $val]).'" class="btn btn-xs btn-primary showDeleteModal"><i class="fas fa-trash"></i> Delete</a>';
                            return $buttons;
                        }
                    })
            ]);
        GridColumnHelper::generateFilterSortingHeader($gridConfig);
        $grid = new Grid($gridConfig);

        return view('page.tahunajaran.kelasta.index', compact('tahunAjaranOptions', 'tahunAjaran', 'grid'));
    }

    public function create($id, Request $request)
    {
        $tahunAjaran = $this->tahunAjaranService->find($id);

        $arrProdiObj = $this->prodiService->findBy([], ['nama' => 'ASC']);
        $arrProdiOptions = FormHelper::arrayObjToOptionArray($arrProdiObj, __('- Pilih Prodi -'));

        $arrMataKuliahObj = $this->mataKuliahService->findBy([], ['nama' => 'ASC']);
        $arrMataKuliahOptions = FormHelper::arrayObjToOptionArray($arrMataKuliahObj, __('- Pilih Mata Kuliah -'));

        $arrDosenObj = $this->dosenService->findBy([], ['namaLengkap' => 'ASC']);
        $arrDosenOptions = FormHelper::arrayObjToOptionArray($arrDosenObj, __('- Pilih Dosen -'), 'namaLengkap');

        if ($request->isMethod('get')) {
            return view('page.tahunajaran.kelasta.create', compact(
                'tahunAjaran',
                'arrProdiOptions',
                'arrMataKuliahOptions',
                'arrDosenOptions',
            ));
        } else {
            $kelas = new KelasTADTO();
            $kelas->setAttributesFromRequestArray($request->all());
            $kelas->taId = $id;

            $validator = $this->kelasTAService->createValidation($kelas);
            if ($validator->fails()) {
                return response()->json(
                    $validator->messages(), 500
                );
            } else {
                try {
                    $isDuplicate = $this->kelasTAService->checkDuplicate($kelas);

                    if ($isDuplicate) {
                        return response()->json(
                            ['message' => 'Data kelas sudah ada, duplikasi data tidak diperbolehkan'], 500
                        );
                    }

                    $this->kelasTAService->create($kelas);

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
        $kelas = $this->kelasTAService->find($id);
        $tahunAjaran = $kelas->getTahunAjaran();

        $arrProdiObj = $this->prodiService->findBy([], ['nama' => 'ASC']);
        $arrProdiOptions = FormHelper::arrayObjToOptionArray($arrProdiObj, __('- Pilih Prodi -'));

        $arrMataKuliahObj = $this->mataKuliahService->findBy([], ['nama' => 'ASC']);
        $arrMataKuliahOptions = FormHelper::arrayObjToOptionArray($arrMataKuliahObj, __('- Pilih Mata Kuliah -'));

        $arrDosenObj = $this->dosenService->findBy([], ['namaLengkap' => 'ASC']);
        $arrDosenOptions = FormHelper::arrayObjToOptionArray($arrDosenObj, __('- Pilih Dosen -'), 'namaLengkap');

        if ($request->isMethod('get')) {
            return view('page.tahunajaran.kelasta.update', compact(
                'kelas',
                'tahunAjaran',
                'arrProdiOptions',
                'arrMataKuliahOptions',
                'arrDosenOptions',
            ));
        } else {
            $kelas = new KelasTADTO();
            $kelas->setAttributesFromRequestArray($request->all());
            $kelas->taId = $id;

            $validator = $this->kelasTAService->updateValidation($kelas);
            if ($validator->fails()) {
                return response()->json(
                    $validator->messages(), 500
                );
            } else {
                try {
                    $isDuplicate = $this->kelasTAService->checkDuplicate($kelas, $id);

                    if ($isDuplicate) {
                        return response()->json(
                            ['message' => 'Data kelas sudah ada, duplikasi data tidak diperbolehkan'], 500
                        );
                    }

                    $this->kelasTAService->update($kelas, $id);

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

    public function view($id)
    {
        $kelas = $this->kelasTAService->find($id);
        $tahunAjaran = $kelas->getTahunAjaran();

        return view('page.tahunajaran.kelasta.view', compact('kelas', 'tahunAjaran'));
    }
}