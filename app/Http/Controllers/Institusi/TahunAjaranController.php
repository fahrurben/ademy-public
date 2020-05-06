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

        $grid = new Grid(
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
//                                $buttons ='<a href="'.route('fakultas.view', ['id' => $val]).'" class="btn btn-xs btn-primary showViewModal"><i class="far fa-file-alt"></i> View</a>';
//                                $buttons .=' <a href="'.route('fakultas.update', ['id' => $val]).'"  class="btn btn-xs btn-primary showEditModal"><i class="fas fa-edit"></i> Update</a>';
//                                $buttons .=' <a href="'.route('fakultas.delete', ['id' => $val]).'" class="btn btn-xs btn-primary showDeleteModal"><i class="fas fa-trash"></i> Delete</a>';
//                                return $buttons;
                                return '';
                            }
                        })
                ])
        );

        return view('page.intitusi.tahunajaran.index', compact('grid'));
    }

    public function create(Request $request)
    {
        $arrTahunAjaranObj = $this->tahunAjaranService->findBy([], ['tahunAwal' => 'ASC', 'tipe' => 'DESC']);
        $arrTahunAjaran = FormHelper::arrayObjToOptionArray($arrTahunAjaranObj, __('- Pilih Tahun Ajaran -'));

        if ($request->isMethod('get')) {
            return view('page.intitusi.tahunajaran.create', compact('arrTahunAjaran'));
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
}