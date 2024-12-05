<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Section;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SectionController extends Controller
{

    public function index()
    {
        $sections = Section::all();
        return view('dashboard.sections.index',compact('sections'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
{
    $inputs = $request->all();

    // التحقق من وجود القسم مسبقًا
    $check_input_exists = Section::where('section_name', '=', $inputs['section_name'])->exists();

    if ($check_input_exists) {
        session()->flash('Error', 'خطأ! هذا القسم مسجل من قبل.');
        return redirect('sections');
    } else {
        Section::create([
            'section_name' => $request->section_name,
            'description'  => $request->description,
            'created_by'   => Auth::user()->name,
        ]);

        session()->flash('Add', 'تم إضافة القسم بنجاح.');
        return redirect('sections');
    }
}



    public function show(Section $section)
    {
        //
    }


    public function edit(Section $section)
    {
        //
    }


    public function update(Request $request, Section $section)
    {
        //
    }

    public function destroy(Section $section)
    {
        //
    }
}
