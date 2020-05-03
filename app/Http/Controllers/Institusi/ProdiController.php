<?php
/**
 * Created by PhpStorm.
 * User: fahrur
 * Date: 03/05/20
 * Time: 15:13
 */

namespace App\Http\Controllers\Institusi;

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
                ])
        );

        return view('page.intitusi.prodi.index', compact('grid'));
    }

}