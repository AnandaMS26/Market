<?php

namespace App\Http\Controllers;

use App\Models\AcademyPackage;
use App\Http\Controllers\API\ResponseFormatter;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class AcademyPackageController extends Controller
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
    public function index(Request $request)
    {
        $search = $request->search;

        $data = AcademyPackage::select('id','title','level','type','picture','mentor','lesson')
                    ->when($search,function($query,$search){
                        return $query->where('title','like',"%{$search}%")
                                    ->orWhere('type','like',"%{$search}%")
                                    ->orWhere('mentor','like',"%{$search}%");
                    })
                    ->paginate(10);
        
        if($data)
        {

            if($data)
                return ResponseFormatter::success($data, 'Data Academy berhasil diambil');
            else
                return ResponseFormatter::error(null, 'Data Academy tidak ada', 404);
        }
        // return view('pages.AcademyPackage.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.AcademyPackage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $request->validate([

                'title' => 'required',
                'type' => 'required',
                'picture' => 'required',
                'mentor' => 'required',
                'rating' => 'required',
                'time' => 'required',
                'lesson' => 'required',
                'level' => 'required',
                'desc_detail' => 'required',
                'desc_goal' => 'required',
                'desc_syllabus' => 'required',
            ]);

            $data = new AcademyPackage;
        $data->title = $request->input('title');
        $data->type = $request->input('type');
        $data->mentor = $request->input('mentor');
        $data->rating = $request->input('rating');
        $data->time = $request->input('time');
        $data->lesson = $request->input('lesson');
        $data->level = $request->input('level');
        $data->desc_detail = $request->input('desc_detail');
        $data->desc_goal = $request->input('desc_goal');
        $data->desc_syllabus = $request->input('desc_syllabus');
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
        // return redirect()->route('AcademyPackage.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(AcademyPackage $AcademyPackage)
    {
        if($AcademyPackage->picture){
            $file = 'assets/picture/'.$AcademyPackage->picture;

            if(file_exists($file)){
                $AcademyPackage->picture = url($file);
            }else{
                $AcademyPackage->picture = url('assets/picture/image.png');
            }
        }else{
            $AcademyPackage->picture = url('assets/picture/image.png');
        }
        return view('pages.AcademyPackage.show',['item'=>$AcademyPackage]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(AcademyPackage $AcademyPackage)
    {
        return view('pages.AcademyPackage.edit',['item'=>$AcademyPackage]);
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
        try {
            $request->validate([

                'title' => 'required',
                'type' => 'required',
                'picture' => 'nullable',
                'mentor' => 'required',
                'rating' => 'required',
                'time' => 'required',
                'lesson' => 'required',
                'level' => 'required',
                'desc_detail' => 'required',
                'desc_goal' => 'required',
                'desc_syllabus' => 'required',
            ]);
    
            $data = AcademyPackage::find($id);
            $data->title = $request->input('title');
            $data->type = $request->input('type');
            $data->mentor = $request->input('mentor');
            $data->rating = $request->input('rating');
            $data->time = $request->input('time');
            $data->lesson = $request->input('lesson');
            $data->level = $request->input('level');
            $data->desc_detail = $request->input('desc_detail');
            $data->desc_goal = $request->input('desc_goal');
            $data->desc_syllabus = $request->input('desc_syllabus');
            if($request->hasfile('picture'))
            {
                $destination = 'assets/picture/'.$data->picture;
                if(File::exists($destination))
                {
                    File::delete($destination);
                }
    
                $file = $request->file('picture');
                $extension = $file->getClientOriginalExtension();
                $filename = time().'.'.$extension;
                $file->move('assets/picture/',$filename);
                $data->picture = $filename;
            }
    
    
            $data->update();
            // return redirect()->route('AcademyPackage.index');
            if($data)
            {
    
                if($data)
                    return ResponseFormatter::success($data, 'Data Academy berhasil diupdate');
                else
                    return ResponseFormatter::error(null, 'Data Academy tidak ada', 404);
            }
    
            } catch (Exception $error) {
                return ResponseFormatter::error(null, 'Data Academy tidak ada', 404);
            }
        


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $data = AcademyPackage::find($id);

        $destination = 'assets/picture/'.$data->picture;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $data->delete();
        // return redirect()->route('AcademyPackage.index');

        if($data)
            {
    
                if($data)
                    return ResponseFormatter::success($data, 'Data Academy berhasil dihapus');
                else
                    return ResponseFormatter::error(null, 'Data Academy tidak ada', 404);
            }
    
            } catch (Exception $error) {
                return ResponseFormatter::error(null, 'Data Academy tidak ada', 404);
            }
        
    }
}
