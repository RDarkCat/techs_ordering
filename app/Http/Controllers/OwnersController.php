<?php

namespace App\Http\Controllers;

use App\Models\Owners;
use Illuminate\Http\Request;

class OwnersController extends Controller
{
    public function index() {

        $owners = Owners::query()
            ->simplePaginate(10);

        return view('owners.index')->with('owners', $owners);
    }
}
