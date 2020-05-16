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
        return view('page.tahunajaran.kelasta.index', compact('tahunAjaran'));
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
}