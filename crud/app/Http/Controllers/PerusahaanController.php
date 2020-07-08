<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\perusahaan;
class perusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perusahaans = perusahaan::latest()->paginate(5);
		
        return view('perusahaan.index', compact('perusahaans'))
                  ->with('i', (request()->input('page',1) -1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perusahaan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
          'namaPerusahaan' => 'required',
          'emailPerusahaan' => 'required',
		  'logoPerusahaan' => 'required|image|mimes:png|max:2000',
		  'websitePerusahaan' => 'required'
		  
        ]);
	  $image = $request->logoPerusahaan;
        $img_new = time() . $image->getClientOriginalName();
        $image->move('../storage/app/company' , $img_new);
           $perusahaan=Perusahaan::create([
           
            'namaPerusahaan' => $request->namaPerusahaan,
            'emailPerusahaan' => $request->emailPerusahaan,
            'websitePerusahaan' => $request->websitePerusahaan,
            'logoPerusahaan' => '../storage/app/company/' . $img_new
            
           ]); 
      
        return redirect()->route('perusahaan.index')
                        ->with('success', 'perusahaan baru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $perusahaan = perusahaan::find($id);
        return view('perusahaan.detail', compact('perusahaan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $perusahaan = perusahaan::find($id);
        return view('perusahaan.edit', compact('perusahaan'));
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
        'namaPerusahaan' => 'required',
          'emailPerusahaan' => 'required',
		  
		 
		  'websitePerusahaan' => 'required'
      ]);
      $perusahaan = Perusahaan::find($id);
	  if($request->hasFile('logoPerusahaan'))
        {
            $logoPerusahaan = $request->logoPerusahaan;
            $image_new = time() . $logoPerusahaan->getClientOriginalName();
            $logoPerusahaan->move('../storage/app/company/' , $image_new);
            $perusahaan->logoPerusahaan = '../storage/app/company/' . $image_new;
        }

      $perusahaan->namaPerusahaan = $request->get('namaPerusahaan');
      $perusahaan->emailPerusahaan = $request->get('emailPerusahaan');
	
	
      $perusahaan->websitePerusahaan = $request->get('websitePerusahaan');
	  
      $perusahaan->save();
	  
      return redirect()->route('perusahaan.index')
                      ->with('success', 'Data perusahaan berhasil diupdate');
    }

           
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $perusahaan = perusahaan::find($id);
        $perusahaan->delete();
        return redirect()->route('perusahaan.index')
                        ->with('success', 'Data perusahaan berhasil dihapus');
    }
}
