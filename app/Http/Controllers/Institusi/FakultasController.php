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
use Domain\Organization\Organization;
use Illuminate\Http\Request;
use Nayjest\Grids\Components\ColumnsHider;
use Nayjest\Grids\Components\FiltersRow;
use Nayjest\Grids\Components\HtmlTag;
use Nayjest\Grids\Components\OneCellRow;
use Nayjest\Grids\Components\RecordsPerPage;
use Nayjest\Grids\Components\THead;
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

    private $organizationRepository;

    public function __construct(EntityManagerInterface $entityManager, FakultasService $fakultasService)
    {
        $this->entityManager = $entityManager;
        $this->fakultasRepository = $entityManager->getRepository(Fakultas::class);
        $this->organizationRepository = $entityManager->getRepository(Organization::class);
        $this->fakultasService = $fakultasService;
    }

    public function index($subdomain, Request $request)
    {
        $organiztionId = $request->get('organizationId');
        $getFakultasQuery = $this->fakultasRepository->getFakultasGridQuery($organiztionId);

        $grid = new Grid(
            (new GridConfig())
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
                                $buttons ='<a class="btn btn-xs btn-primary"><i class="far fa-file-alt"></i> View</a>';
                                $buttons .=' <a class="btn btn-xs btn-primary"><i class="fas fa-edit"></i> Update</a>';
                                $buttons .=' <a class="btn btn-xs btn-primary"><i class="fas fa-trash"></i> Delete</a>';
                                return $buttons;
                            }
                        })
                ])
        );

        return view('page.intitusi.fakultas.index', compact('grid'));
    }

    public function create($subdomain, Request $request)
    {
        if ($request->isMethod('get')) {
            return view('page.intitusi.fakultas.create');
        } else {
            $nama = $request->get('nama');
            $kode = $request->get('kode');

            $validator = $this->fakultasService->createValidation($request->all());

            if ($validator->fails()) {
                return redirect('fakultas/create')
                    ->withErrors($validator)
                    ->withInput();
            } else {
                $organiztionId = $request->get('organizationId');
                $organization = $this->organizationRepository->find($organiztionId);

                $fakultas = new Fakultas();
                $fakultas->setNama($nama);
                $fakultas->setKode($kode);
                $fakultas->setOrganization($organization);

                $this->fakultasService->create($fakultas);

                return redirect('fakultas')
                    ->with('success', __('Rekod berhasil disimpan'));
            }
        }
    }


}