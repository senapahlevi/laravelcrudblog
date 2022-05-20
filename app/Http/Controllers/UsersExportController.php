<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
class UsersExportController extends Controller
{
     public function export(){
        return Excel::download(new UsersExport,'users.xlsx');
    }
}
