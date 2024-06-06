<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoteappController extends Controller
{
    //
    public function showNote()
    {
        return view("noteapp.createnote");
    }
}
