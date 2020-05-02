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
        $arrFakultas = $this->fakultasRepository->getFakultas($organiztionId);

        return view('page.intitusi.fakultas.index', compact('arrFakultas'));
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