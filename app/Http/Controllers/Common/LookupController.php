<?php
/**
 * Created by PhpStorm.
 * User: fahrur
 * Date: 16/05/20
 * Time: 5:25
 */

namespace App\Http\Controllers\Common;


use App\Helper\RegionLookupHelper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LookupController extends Controller
{
    public function getAllKota(Request $request)
    {
        $provinsiId = $request->get('provinsiId');

        $kotaList = collect(RegionLookupHelper::CITY);

        if (!empty($provinsiId)) {
            $kotaList = $kotaList->filter(function ($item) use ($provinsiId) {
                return strpos($item['id'], $provinsiId) === 0;
            });
        }

        $kotaOptions = [];
        foreach ($kotaList as $item) {
            $obj = new \stdClass();
            $obj->id = $item['id'];
            $obj->name = $item['name'];
            $kotaOptions[] = $obj;
        }

        return response()->json($kotaOptions);
    }
}