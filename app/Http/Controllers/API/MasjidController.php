<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Masjid;
use Illuminate\Http\Request;

class MasjidController extends Controller
{
    public function index(){
        $masjids = Masjid::all();

        if($masjids){
            return ResponseFormatter::success(
                $masjids,
                'Data masjid berhasil diambil'
            );
        }
        else
        {
            return ResponseFormatter::error(
                null,
                'Data masjid tidak ada',
                404
            );
        }
    }
}
