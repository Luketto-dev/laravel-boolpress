<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request){
        $data = $request->all();

        // dovrebbe salvare i dati a db in una tabella contacts
        //--- IMPLEMENTARE IN FUTURIO ---//

        return $data;
    }
}
