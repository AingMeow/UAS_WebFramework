<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;

class BookkeepingController extends Controller
{
    public function index()
    {
        // Ambil semua data dari tabel records
        $records = Record::all();

        // Kirim data ke view records.index
        return view('records.index', compact('records'));
    }
}