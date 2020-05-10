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
use Domain\Institusi\DTOs\DosenDTO;
use Domain\Institusi\Services\DosenService;
use Domain\Institusi\Services\FakultasService;
use Illuminate\Http\Request;
use Nayjest\Grids\DbalDataProvider;
use Nayjest\Grids\FieldConfig;
use Nayjest\Grids\FilterConfig;
use Nayjest\Grids\Grid;
use Nayjest\Grids\GridConfig;
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
        $getDosenQuery = $this->dosenService->getDosenGridQuery();

        // Initialize fakultas filter options
        $fakultasOptions = [];
        $fakultasList = $this->fakultasService->findBy(['deletedAt' => null], ['nama' => 'ASC']);
        foreach ($fakultasList as $fakultas) {
            $fakultasOptions[$fakultas->getId()] = $fakultas->getNama();
        }

        $gridConfig = (new GridConfig())
            ->setName('pageGrid')
            ->setDataProvider(new DbalDataProvider($getDosenQuery))
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
                            $buttons ='<a href="'.route('dosen.view', ['id' => $val]).'" class="btn btn-xs btn-primary showViewModal"><i class="far fa-file-alt"></i> View</a>';
                            $buttons .=' <a href="'.route('dosen.update', ['id' => $val]).'"  class="btn btn-xs btn-primary showEditModal"><i class="fas fa-edit"></i> Update</a>';
                            $buttons .=' <a href="'.route('dosen.delete', ['id' => $val]).'" class="btn btn-xs btn-primary showDeleteModal"><i class="fas fa-trash"></i> Delete</a>';
                            return $buttons;
                        }
                    })
            ]);
        GridColumnHelper::generateFilterSortingHeader($gridConfig);
        $grid = new Grid($gridConfig);

        return view('page.institusi.dosen.index', compact('grid'));
    }

    public function create(Request $request)
    {
        // Initialize fakultas filter options
        $fakultasList = $this->fakultasService->findBy(['deletedAt' => null], ['nama' => 'ASC']);
        $fakultasOptions = FormHelper::arrayObjToOptionArray($fakultasList, __('- Pilih Fakultas -'));

        $jabatanOptions = array_merge(['' => __('- Pilih Jabatan -')], Constant::JABATAN_DOSEN_TYPE);

        if ($request->isMethod('get')) {
            return view('page.institusi.dosen.create', compact('fakultasOptions', 'jabatanOptions'));
        } else {
            $validator = $this->dosenService->createValidation($request->all());

            if ($validator->fails()) {
                return response()->json(
                    $validator->messages(), 500
                );
            } else {
                try {
                    $dosen = new DosenDTO();
                    $dosen->setAttributesFromRequestArray($request->all());
                    $dosen->setTanggalLahirFromLocale($dosen->tanggalLahir);

                    $this->dosenService->create($dosen);
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
        $dosen = $this->dosenService->find($id);

        // Initialize fakultas filter options
        $fakultasList = $this->fakultasService->findBy(['deletedAt' => null], ['nama' => 'ASC']);
        $fakultasOptions = FormHelper::arrayObjToOptionArray($fakultasList, __('- Pilih Fakultas -'));

        $jabatanOptions = array_merge(['' => __('- Pilih Jabatan -')], Constant::JABATAN_DOSEN_TYPE);

        if ($request->isMethod('get')) {
            return view('page.institusi.dosen.update', compact('dosen', 'fakultasOptions', 'jabatanOptions'));
        } else {
            $validator = $this->dosenService->updateValidation($request->all(), $id);

            if ($validator->fails()) {
                return response()->json(
                    $validator->messages(), 500
                );
            } else {
                try {
                    $dosen= new DosenDTO();
                    $dosen->setAttributesFromRequestArray($request->all());
                    $dosen->setTanggalLahirFromLocale($dosen->tanggalLahir);

                    $this->dosenService->update($dosen, $id);
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
        $dosen = $this->dosenService->find($id);

        return view('page.institusi.dosen.view', compact('dosen'));
    }

    public function delete($id)
    {
        try {
            $this->dosenService->delete($id);
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