<?php

namespace App\Http\Controllers;

use App\Models\AcademyPackage;
use App\Models\SilabusPackage;
use App\Models\Materi;
use App\Http\Controllers\API\ResponseFormatter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(SilabusPackage $Academy)
    {
        $data = Materi::all();
        if($data)
        {

            if($data)
                return ResponseFormatter::success($data, 'Data Academy berhasil diambil');
            else
                return ResponseFormatter::error(null, 'Data Academy tidak ada', 404);
        }
        // return view('pages.MateriPackage.index',['data'=>$data,'SilabusPackage'=>$Academy]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(SilabusPackage $Academy)
    {
        return view('pages.MateriPackage.create',['SilabusPackage'=>$Academy]);
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

                'title' => 'required',
                'link' => 'required',
                'picture' => 'required',
            ]);
    
            $data = Materi::find($id);
            $data->title = $request->input('title');
            $data->link = $request->input('link');
            if($request->hasfile('picture'))
            {
                $file = $request->file('picture');
                $extension = $file->getClientOriginalExtension();
                $filename = time().'.'.$extension;
                $file->move('assets/picture/',$filename);
                $data->picture = $filename;
            }
            $data->save();
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
        
        // return redirect()->route('Materi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Materi $Materi)
    {
        if($Materi->picture){
            $file = 'assets/picture/'.$Materi->picture;

            if(file_exists($file)){
                $Materi->picture = url($file);
            }else{
                $Materi->picture = url('assets/picture/image.png');
            }
        }else{
            $Materi->picture = url('assets/picture/image.png');
        }
        return view('pages.MateriPackage.show',['item'=>$Materi]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(AcademyPackage $Academy, Materi $Materi)
    {
        return view('pages.MateriPackage.edit',['Academy'=>$Academy,'data'=>$Materi]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([

            'title' => 'required',
            'link' => 'required',
            'picture' => 'required',
        ]);

        $data = Materi::find($id);
        $data->title = $request->input('title');
        $data->link = $request->input('link');
        $data['picture'] = $request->file('picture')->store('assets/picture', 'public');
        if($request->hasfile('picture'))
        {
            $file = $request->file('picture');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('assets/picture/',$filename);
            $data->picture = $filename;
        }
        $data->update();
        return redirect()->route('Materi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(AcademyPackage $Academy, Materi $Materi)
    {
        $Materi->delete();
        return redirect()->route('Materi.index',['Academy'=>$Academy->id]);
    }
}
