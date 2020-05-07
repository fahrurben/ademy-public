<?php
/**
 * Created by PhpStorm.
 * User: fahrur
 * Date: 07/05/20
 * Time: 4:41
 */

namespace App\Http\Controllers\Institusi;


use App\Constant;
use App\Helper\FormHelper;
use App\Http\Controllers\Controller;
use Doctrine\ORM\EntityManagerInterface;
use Domain\Institusi\DTOs\TahunAjaranDTO;
use Domain\Institusi\Services\TahunAjaranService;
use Illuminate\Http\Request;
use Nayjest\Grids\DbalDataProvider;
use Nayjest\Grids\FieldConfig;
use Nayjest\Grids\FilterConfig;
use Nayjest\Grids\Grid;
use Nayjest\Grids\GridConfig;
use Nayjest\Grids\IdFieldConfig;
use Nayjest\Grids\ObjectDataRow;
use App\Helper\GridColumnHelper;

class TahunAjaranController extends Controller
{
    private $entityManager;

    private $tahunAjaranService;

    public function __construct(EntityManagerInterface $entityManager, TahunAjaranService $tahunAjaranService)
    {
        $this->entityManager = $entityManager;
        $this->tahunAjaranService = $tahunAjaranService;
    }

    public function index(Request $request)
    {
        $gridQuery = $this->tahunAjaranService->getGridQuery();

        $gridConfig =
            (new GridConfig())
                ->setName('pageGrid')
                ->setDataProvider(new DbalDataProvider($gridQuery))
                ->setColumns([
                    GridColumnHelper::generateNumberingViewColumn(),
                    GridColumnHelper::generateViewColumn('tipe', 'Tipe')
                        ->setCallback(function ($val) {
                            return Constant::TA_TYPE[$val] ?? '';
                        }),
                    GridColumnHelper::generateViewColumn('tahun_awal', 'Tahun Awal'),
                    GridColumnHelper::generateViewColumn('tahun_akhir', 'Tahun Akhir'),
                    GridColumnHelper::generateViewColumn('status', 'Status')
                        ->setCallback(function ($val) {
                            return Constant::STATUS_TYPE[$val] ?? '';
                        }),
                    (new FieldConfig())
                        ->setName('id')
                        ->setLabel('Action')
                        ->setCallback(function ($val, ObjectDataRow $row) {
                            if ($val) {
                                $buttons ='<a href="'.route('tahunajaran.view', ['id' => $val]).'" class="btn btn-xs btn-primary showViewModal"><i class="far fa-file-alt"></i> View</a>';
                                $buttons .=' <a href="'.route('tahunajaran.update', ['id' => $val]).'"  class="btn btn-xs btn-primary showEditModal"><i class="fas fa-edit"></i> Update</a>';
                                $buttons .=' <a href="'.route('tahunajaran.delete', ['id' => $val]).'" class="btn btn-xs btn-primary showDeleteModal"><i class="fas fa-trash"></i> Delete</a>';
                                return $buttons;
                            }
                        })
                ]);

        GridColumnHelper::generateFilterSortingHeader($gridConfig);
        $grid = new Grid($gridConfig);

        return view('page.intitusi.tahunajaran.index', compact('grid'));
    }

    public function create(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('page.intitusi.tahunajaran.create');
        } else {
            $validator = $this->tahunAjaranService->createValidation($request->all());

            if ($validator->fails()) {
                return response()->json(
                    $validator->messages(), 500
                );
            } else {
                try {
                    $ta = new TahunAjaranDTO();
                    $ta->setAttributesFromRequestArray($request->all());

                    // Validasi duplicate tahun ajaran
                    if ($this->tahunAjaranService->isExist($ta)) {
                        throw new \Exception('Tidak boleh ada duplikasi tahun ajaran');
                    }

                    $this->tahunAjaranService->create($ta);
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
        $tahunAjaran = $this->tahunAjaranService->find($id);

        if ($request->isMethod('get')) {
            return view('page.intitusi.tahunajaran.update', compact('tahunAjaran'));
        } else {
            $requestData = $request->all();
            $requestData['id'] = $id;
            $validator = $this->tahunAjaranService->updateValidation($requestData);

            if ($validator->fails()) {
                return response()->json(
                    $validator->messages(), 500
                );
            } else {
                try {
                    $tahunAjaranObject = new TahunAjaranDTO();
                    $tahunAjaranObject->setAttributesFromRequestArray($request->all());

                    // Validasi duplicate tahun ajaran
                    if ($this->tahunAjaranService->isExist($tahunAjaranObject, $id)) {
                        throw new \Exception('Tidak boleh ada duplikasi tahun ajaran');
                    }

                    $this->tahunAjaranService->update($id, $tahunAjaranObject);
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

    public function view($id, Request $request)
    {
        $tahunAjaran = $this->tahunAjaranService->find($id);

        return view('page.intitusi.tahunajaran.view', compact('tahunAjaran'));
    }

    public function delete($id, Request $request)
    {
        try {
            $this->tahunAjaranService->delete($id);
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