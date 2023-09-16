<?php

namespace App\Http\Controllers;

use App\Models\MahasiswaModel;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function getDataPagination()
    {
        $data = MahasiswaModel::paginate(20);

        return response()->json([
            'message' => 'success',
            'data' => $data
        ]);
    }

    public function paginationView()
    {
        $data = MahasiswaModel::paginate(20);

        return view('pagination')->with('data' , $data);
    }
}
