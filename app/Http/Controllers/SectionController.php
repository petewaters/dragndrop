<?php

namespace App\Http\Controllers;

use App\Section;

use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function edit(Section $section)
    {
        $section->load('parts');
        
        return view('section.edit', compact('section'));
    }

    public function update(Section $section)
    {

    }
}
