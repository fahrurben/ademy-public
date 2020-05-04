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
use Domain\Institusi\Fakultas;
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

    private $fakultasRepository;

    private $fakultasService;

    public function __construct(EntityManagerInterface $entityManager, FakultasService $fakultasService)
    {
        $this->entityManager = $entityManager;
        $this->fakultasRepository = $entityManager->getRepository(Fakultas::class);
        $this->fakultasService = $fakultasService;
    }

    public function index(Request $request)
    {
        $getFakultasQuery = $this->fakultasRepository->getFakultasGridQuery();

        $grid = new Grid(
            (new GridConfig())
                ->setName('pageGrid')
                ->setDataProvider(new DbalDataProvider($getFakultasQuery))
                ->setColumns([
                    new IdFieldConfig(),
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
                ])
        );

        return view('page.intitusi.fakultas.index', compact('grid'));
    }

    public function create(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('page.intitusi.fakultas.create');
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
                    $organizationId = $request->get('organizationId');

                    $fakultas = new Fakultas();
                    $fakultas->setNama($nama);
                    $fakultas->setKode($kode);

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
        $fakultas = $this->fakultasRepository->find($id);

        return view('page.intitusi.fakultas.view', compact('fakultas'));
    }

    public function update($id, Request $request)
    {
        $fakultas = $this->fakultasRepository->find($id);

        if ($request->isMethod('get')) {
            return view('page.intitusi.fakultas.update', ['fakultas' => $fakultas]);
        } else {
            try {
                $nama = $request->get('nama');
                $kode = $request->get('kode');

                $validator = $this->fakultasService->createValidation($request->all());

                $fakultas->setNama($nama);
                $fakultas->setKode($kode);

                $this->fakultasService->update($fakultas);
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
            $fakultas = $this->fakultasRepository->find($id);
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