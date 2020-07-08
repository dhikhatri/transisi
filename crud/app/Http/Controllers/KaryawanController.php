<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\karyawan;
class karyawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawans = karyawan::latest()->paginate(5);
        return view('karyawan.index', compact('karyawans'))
                  ->with('i', (request()->input('page',1) -1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('karyawan.create');
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
          'namaKaryawan' => 'required',
          'emailKaryawan' => 'required',
		  'companyKaryawan' => 'required'
        ]);

        karyawan::create($request->all());
        return redirect()->route('karyawan.index')
                        ->with('success', 'karyawan baru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $karyawan = karyawan::find($id);
        return view('karyawan.detail', compact('karyawan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $karyawan = karyawan::find($id);
        return view('karyawan.edit', compact('karyawan'));
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
        'namaKaryawan' => 'required',
        'emailKaryawan' => 'required',
		'companyKaryawan' => 'required'
      ]);
      $karyawan = karyawan::find($id);
      $karyawan->namaKaryawan = $request->get('namaKaryawan');
      $karyawan->emailKaryawan = $request->get('emailKaryawan');
	   $karyawan->companyKaryawan = $request->get('companyKaryawan');
      $karyawan->save();
      return redirect()->route('karyawan.index')
                      ->with('success', 'Data karyawan berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $karyawan = karyawan::find($id);
        $karyawan->delete();
        return redirect()->route('karyawan.index')
                        ->with('success', 'Data karyawan berhasil dihapus');
    }
}
