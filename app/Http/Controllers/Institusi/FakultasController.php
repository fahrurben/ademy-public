<?php
/**
 * Created by PhpStorm.
 * User: fahrur
 * Date: 02/05/20
 * Time: 13:11
 */

namespace App\Http\Controllers\Institusi;


use App\Http\Controllers\Controller;
use Doctrine\ORM\EntityManagerInterface;
use Domain\Institusi\DTOs\FakultasDTO;
use Domain\Institusi\Services\FakultasService;
use Illuminate\Http\Request;
use Nayjest\Grids\DbalDataProvider;
use Nayjest\Grids\FieldConfig;
use Nayjest\Grids\FilterConfig;
use Nayjest\Grids\Grid;
use Nayjest\Grids\GridConfig;
use Nayjest\Grids\IdFieldConfig;
use Nayjest\Grids\ObjectDataRow;
use App\Helper\GridColumnHelper;

class FakultasController extends Controller
{
    private $entityManager;

    private $fakultasService;

    public function __construct(EntityManagerInterface $entityManager, FakultasService $fakultasService)
    {
        $this->entityManager = $entityManager;
        $this->fakultasService = $fakultasService;
    }

    public function index(Request $request)
    {
        $getFakultasQuery = $this->fakultasService->getFakultasGridQuery();

        $gridConfig =
            (new GridConfig())
                ->setName('pageGrid')
                ->setDataProvider(new DbalDataProvider($getFakultasQuery))
                ->setColumns([
                    GridColumnHelper::generateNumberingViewColumn(),
                    GridColumnHelper::generateViewColumn('kode', 'Kode', FilterConfig::OPERATOR_LIKE),
                    GridColumnHelper::generateViewColumn('nama', 'Nama', FilterConfig::OPERATOR_LIKE),
                    (new FieldConfig())
                        ->setName('id')
                        ->setLabel('Action')
                        ->setCallback(function ($val, ObjectDataRow $row) {
                            if ($val) {
                                $buttons ='<a href="'.route('fakultas.view', ['id' => $val]).'" class="btn btn-xs btn-primary showViewModal"><i class="far fa-file-alt"></i> View</a>';
                                $buttons .=' <a href="'.route('fakultas.update', ['id' => $val]).'"  class="btn btn-xs btn-primary showEditModal"><i class="fas fa-edit"></i> Update</a>';
                                $buttons .=' <a href="'.route('fakultas.delete', ['id' => $val]).'" class="btn btn-xs btn-primary showDeleteModal"><i class="fas fa-trash"></i> Delete</a>';
                                return $buttons;
                            }
                        })
                ]);
        GridColumnHelper::generateFilterSortingHeader($gridConfig);
        $grid = new Grid($gridConfig);

        return view('page.institusi.fakultas.index', compact('grid'));
    }

    public function create(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('page.institusi.fakultas.create');
        } else {
            $nama = $request->get('nama');
            $kode = $request->get('kode');

            $validator = $this->fakultasService->createValidation($request->all());

            if ($validator->fails()) {
                return response()->json(
                    $validator->messages(), 500
                );
            } else {
                try {
                    $fakultas = new FakultasDTO();
                    $fakultas->setAttributesFromRequestArray($request->all());

                    $this->fakultasService->create($fakultas);
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
        $fakultas = $this->fakultasService->find($id);

        return view('page.institusi.fakultas.view', compact('fakultas'));
    }

    public function update($id, Request $request)
    {
        $fakultas = $this->fakultasService->find($id);

        if ($request->isMethod('get')) {
            return view('page.institusi.fakultas.update', ['fakultas' => $fakultas]);
        } else {
            try {
                $requestData = $request->all();
                $requestData['id'] = $id;
                $validator = $this->fakultasService->updateValidation($requestData);

                if ($validator->fails()) {
                    return response()->json(
                        $validator->messages(), 500
                    );
                } else {
                    $fakultas = new FakultasDTO();
                    $fakultas->setAttributesFromRequestArray($request->all());

                    $this->fakultasService->update($id, $fakultas);
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

    public function delete($id, Request $request)
    {
        try {
            $this->fakultasService->delete($id);
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