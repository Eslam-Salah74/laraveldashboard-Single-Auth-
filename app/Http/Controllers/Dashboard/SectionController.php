<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Section;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreSectionRequest;

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


    public function store(StoreSectionRequest $request)
    {
        try {
            Section::create([
                'section_name' => $request->section_name,
                'description'  => $request->description,
                'created_by'   => Auth::user()->name,
            ]);

            session()->flash('success', 'تم إضافة القسم بنجاح.');
            return redirect('sections');
        } catch (\Exception $e) {

            session()->flash('Error', 'حدث خطأ أثناء إضافة القسم. حاول مرة أخرى.');
            return redirect()->back()->withInput();
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
