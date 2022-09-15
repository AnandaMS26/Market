<?php

namespace App\Http\Controllers;

use App\Models\AcademyPackage;
use App\Models\SilabusPackage;
use App\Http\Controllers\API\ResponseFormatter;
use Illuminate\Http\Request;

class SilabusPackageController extends Controller
{

    // function __construct()
    // {
    //     $this->middleware('can:role,"admin"',[
    //         'except'=>['index','show']
    //     ]);
    // }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AcademyPackage $Academy)
    {
        $data = SilabusPackage::where('academy_package_id',$Academy->id)->get();
        if($data)
        {

            if($data)
                return ResponseFormatter::success($data, 'Data Academy berhasil diambil');
            else
                return ResponseFormatter::error(null, 'Data Academy tidak ada', 404);
        }
        // return view('pages.SilabusPackage.index',['data'=>$data,'AcademyPackage'=>$Academy]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(AcademyPackage $Academy)
    {
        return view('pages.SilabusPackage.create',['AcademyPackage'=>$Academy]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, AcademyPackage $Academy)
    {
        try {
            $request->validate([
                'silabus_title' => 'required',
                'silabus_time' => 'required',
                'silabus_lesson' => 'required'
            ]);
    
            SilabusPackage::create([
                'academy_package_id'=>$Academy->id,
                'silabus_title'=>$request->silabus_title,
                'silabus_time'=>$request->silabus_time,
                'silabus_lesson'=>$request->silabus_lesson,
            ]);

            if($data)
            {
    
                if($data)
                    return ResponseFormatter::success($data, 'Data Academy berhasil diambil');
                else
                    return ResponseFormatter::error(null, 'Data Academy tidak ada', 404);
            }
    
    
            } catch (Exception $error) {
                return ResponseFormatter::error(null, 'Data Academy tidak ada', 404);
            }
        

        // return redirect()->route('Academy.Silabus.index',['Academy'=>$Academy->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(AcademyPackage $Academy, SilabusPackage $Silabu)
    {
        return view('pages.SilabusPackage.edit',['Academy'=>$Academy,'data'=>$Silabu]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,AcademyPackage $Academy , SilabusPackage $Silabu)
    {
        $request->validate([
            'silabus_title' => 'required',
            'silabus_time' => 'required',
            'silabus_lesson' => 'required'
        ]);

        $Silabu->update([
            'academy_package_id'=>$Academy->id,
            'silabus_title'=>$request->silabus_title,
            'silabus_time'=>$request->silabus_time,
            'silabus_lesson'=>$request->silabus_lesson,
        ]);

        $Silabu->update();
        return redirect()->route('Academy.Silabus.index',['Academy'=>$Academy->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(AcademyPackage $Academy,SilabusPackage $Silabu)
    {
        $Silabu->delete();
        return redirect()->route('Academy.Silabus.index',['Academy'=>$Academy->id]);
    }
}
