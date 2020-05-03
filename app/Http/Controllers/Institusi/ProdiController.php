<?php
/**
 * Created by PhpStorm.
 * User: fahrur
 * Date: 03/05/20
 * Time: 15:13
 */

namespace App\Http\Controllers\Institusi;

use App\Helper\FormHelper;
use App\Http\Controllers\Controller;
use Doctrine\ORM\EntityManagerInterface;
use Domain\Institusi\Fakultas;
use Domain\Institusi\Prodi;
use Domain\Institusi\Services\ProdiService;
use Illuminate\Http\Request;
use Nayjest\Grids\DbalDataProvider;
use Nayjest\Grids\FieldConfig;
use Nayjest\Grids\FilterConfig;
use Nayjest\Grids\Grid;
use Nayjest\Grids\GridConfig;
use Nayjest\Grids\IdFieldConfig;
use Nayjest\Grids\ObjectDataRow;
use App\Helper\GridColumnHelper;

class ProdiController extends Controller
{
    private $entityManager;

    private $prodiRepository;

    private $prodiService;

    private $fakultasRepository;

    public function __construct(EntityManagerInterface $entityManager, ProdiService $prodiService)
    {
        $this->entityManager = $entityManager;
        $this->prodiRepository = $entityManager->getRepository(Prodi::class);
        $this->fakultasRepository = $entityManager->getRepository(Fakultas::class);
        $this->prodiService = $prodiService;
    }

    public function index($subdomain, Request $request)
    {
        $getProdiQuery = $this->prodiRepository->getProdiGridQuery();

        $grid = new Grid(
            (new GridConfig())
                ->setName('pageGrid')
                ->setDataProvider(new DbalDataProvider($getProdiQuery))
                ->setColumns([
                    new IdFieldConfig(),
                    GridColumnHelper::generateViewColumn('kode', 'Kode', FilterConfig::OPERATOR_LIKE),
                    GridColumnHelper::generateViewColumn('nama', 'Nama', FilterConfig::OPERATOR_LIKE),
                    (new FieldConfig)
                        ->setName('fakultas_id')
                        ->setLabel('Fakultas')
                        ->addFilter(
                            (new FilterConfig)
                                ->setName('fakultas_id')
                                ->setOperator(FilterConfig::OPERATOR_EQ)
                        )
                        ->setCallback(function ($val, ObjectDataRow $row) {
                            $fakultas = $this->fakultasRepository->find($val);
                            return $fakultas->getNama();
                        })
                        ->setSortable(true)
                    ,
                    (new FieldConfig())
                        ->setName('id')
                        ->setLabel('Action')
                        ->setCallback(function ($val, ObjectDataRow $row) {
                            if ($val) {
                                $buttons = '<a href="'.route('prodi.view', ['id' => $val]).'" class="btn btn-xs btn-primary showViewModal"><i class="far fa-file-alt"></i> View</a>';
                                $buttons .=' <a href="'.route('prodi.update', ['id' => $val]).'"  class="btn btn-xs btn-primary showEditModal"><i class="fas fa-edit"></i> Update</a>';
                                $buttons .=' <a href="'.route('prodi.delete', ['id' => $val]).'" class="btn btn-xs btn-primary showDeleteModal"><i class="fas fa-trash"></i> Delete</a>';
                                return $buttons;
                            }
                        }),
                ])
        );

        return view('page.intitusi.prodi.index', compact('grid'));
    }

    public function create($subdomain, Request $request)
    {
        $arrFakultasObj = $this->fakultasRepository->getAllFakultas();
        $arrFakultas = FormHelper::arrayObjToOptionArray($arrFakultasObj, __('- Pilih Fakultas -'));

        if ($request->isMethod('get')) {
            return view('page.intitusi.prodi.create', compact('arrFakultas'));
        } else {
            $fakultas_id = $request->get('fakultas_id');
            $nama = $request->get('nama');
            $kode = $request->get('kode');

            $validator = $this->prodiService->createValidation($request->all());

            if ($validator->fails()) {
                return response()->json(
                    $validator->messages(), 500
                );
            } else {
                try {
                    $fakultas = $this->fakultasRepository->find($fakultas_id);

                    $prodi = new Prodi();
                    $prodi->setNama($nama);
                    $prodi->setKode($kode);
                    $prodi->setFakultas($fakultas);

                    $this->prodiService->create($prodi);
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

    public function view($subdomain, $id, Request $request)
    {
        $prodi = $this->prodiRepository->findOneBy(['id' => $id]);

        return view('page.intitusi.prodi.view', compact('prodi'));
    }

    public function update($subdomain, $id, Request $request)
    {
        $arrFakultasObj = $this->fakultasRepository->getAllFakultas();
        $arrFakultas = FormHelper::arrayObjToOptionArray($arrFakultasObj, __('- Pilih Fakultas -'));

        $prodi = $this->prodiRepository->find($id);

        if ($request->isMethod('get')) {
            return view('page.intitusi.prodi.update', compact('arrFakultas', 'prodi'));
        } else {
            $fakultas_id = $request->get('fakultas_id');
            $nama = $request->get('nama');
            $kode = $request->get('kode');

            $validator = $this->prodiService->createValidation($request->all());

            if ($validator->fails()) {
                return response()->json(
                    $validator->messages(), 500
                );
            } else {
                try {
                    $fakultas = $this->fakultasRepository->find($fakultas_id);

                    $prodi->setNama($nama);
                    $prodi->setKode($kode);
                    $prodi->setFakultas($fakultas);

                    $this->prodiService->create($prodi);
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