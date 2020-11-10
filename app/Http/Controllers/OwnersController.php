<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;

class OwnersController extends Controller
{
    public function index() {

        $owners = Owner::query()
            ->simplePaginate(10);

        return view('owners.index')->with('owners', $owners);
    }
}
