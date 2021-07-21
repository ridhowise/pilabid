<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\akuntansi;
use Image;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ExportExcel;

class akuntansiController extends Controller
{
	
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	public function __construct(){
    	$this -> middleware('auth');    	
    	//$this -> middleware('akses:2');
    } 
	 
    public function index()
    {
        $data=akuntansi::all();
        $list = [];
        foreach($data as $key=>$items) {
            if(!isset($list[$items->tanggal])) {
                $list[$items->tanggal] = [];
            }
            array_push($list[$items->tanggal], $items);
        }
        // dd($list);
        return view('akuntansi.index',compact('data', 'list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		return view('akuntansi.create');
		
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		if ($request->file('image')) {
            $image = $request->file('image');

            $file_name = time(). rand(1111, 9999) . '.' .$image->getClientOriginalExtension();

            // $save_Path = 'images/'.$file_name;
            //$save_Path = public_path('images/'.$file_name);

            //Image::make($image->getRealPath())->resize(300, 236)->save($save_Path);
            $image->move('images',$file_name);
            \Image::make('images/'.$file_name)->save('images/'.$file_name);
        } else {
            $file_name = null;
        }
        
        $data = new akuntansi;
		$data->name = $request->name;
        $data->tanggal = $request->tanggal;
		$data->debit = $request->debit;
        $data->credit = $request->credit;
        $data->balance = $request->balance;
        $data->source = $request->source;
        $data->pic = $file_name;



	
        $data -> save();
        //request()->pic->move(public_path('assets/images'), $imageName);
        //return redirect('akuntansi');
		
		return redirect()->route('akuntansi.index')->with('alert-success', 'Berhasil Menambahkan Data!');
           
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $data['akuntansi'] = akuntansi::where('id', $id)->get();
	   return view('akuntansi.lihat', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = akuntansi::findOrFail($id);
        return response()->json([
            'data' => $data,
    
        ]);
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
        $data = akuntansi::where('id', $id)->first();

		if ($request->file('image')) {
            $image = $request->file('image');

            $file_name = time(). rand(1111, 9999) . '.' .$image->getClientOriginalExtension();

            // $save_Path = 'images/'.$file_name;
            //$save_Path = public_path('images/'.$file_name);

            //Image::make($image->getRealPath())->resize(300, 236)->save($save_Path);
            $image->move('images',$file_name);
            \Image::make('images/'.$file_name)->resize(300, 300)->save('images/'.$file_name);
        } else {
            $file_name = null;
        }
        
        $data = new akuntansi;
		$data->name = $request->name;
        $data->tanggal = $request->tanggal;
		$data->debit = $request->debit;
        $data->credit = $request->credit;
        $data->source = $request->source;
        $data->balance = $request->balance;
        $data->pic = $file_name;



	
        $data -> save();
		return redirect()->route('akuntansi.index')->with('alert-success', 'Data berhasil diubah!');
		
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = akuntansi::where('id', $id)->first();
		/**$picture = $data->pic;
        File::delete('images/'.$picture);
		*/
		akuntansi::find($id)->delete();
        return back();
    }
    public function export_excel()
	{
		return Excel::download(new ExportExcel, 'data.xlsx');
	}
}
