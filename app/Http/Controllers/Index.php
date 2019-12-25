<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
class Index extends Controller
{
    public function index() {
        dump(DB::table('customer'));
    }

    public function show(){
        dump(DB::table('customer'));
    }
}