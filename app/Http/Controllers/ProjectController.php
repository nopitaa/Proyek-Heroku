<?php 

namespace App\Http\Controllers; 

use App\Models\myprojects; 
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Storage; 

class ProjectController extends Controller 
{ 
    /** 
     * index 
     * 
     * @return void 
     */ 
    public function index() 
    { 
        $fotos = myprojects::latest()->paginate(10); 
        return view('foto.index', compact('fotos')); 
    } 
    public function create() 
    { 
        return view('foto.create'); 
    } 
    public function store(Request $request) 
    { 
        $request->validate([ 
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|', 
            'title' => 'required', 
            'content' => 'required', 
        ]); 
        $image = $request->file('image'); 
        $name = time() . '.' . $image->getClientOriginalExtension(); 
        $destinationPath = public_path('/fotoup'); 
        $image->move($destinationPath, $name); 
        myprojects::create([ 
            'image' => $name, 
            'title' => $request->title, 
            'content' => $request->content, 
        ]); 
        return redirect()->route('myprojects.index')->with('success', 'Foto berhasil di unggah'); 
    } 
    public function show($id) 
    { 
        $foto = myprojects::find($id); 
        return view('foto.show', compact('foto')); 
    } 
    public function edit(myprojects $fotos) 
    { 
        return view('foto.edit', compact('fotos')); 
    } 

    public function update(Request $request, myprojects $fotos) 
    { 
        $request->validate([ 
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
            'title' => 'required', 
            'content' => 'required', 
        ]); 
        if ($request->hasFile('image')) { 
            $image = $request->file('image'); 
            $name = time() . '.' . $image->getClientOriginalExtension(); 
            $destinationPath = public_path('/fotoup'); 
            $image->move($destinationPath, $name); 
            $fotos->image = $name; 
        } 
        $fotos->title = $request->title; 
        $fotos->content = $request->content; 
        $fotos->save(); 
        return redirect()->route('myprojects.index')->with('success', 'Foto berhasil diubah'); 
    } 

    public function destroy($id) 
    { 
        $fotos = myprojects::findOrFail($id); 
        Storage::disk('local')->delete('fotoup/' . $fotos->image); 
        $fotos->delete(); 

        if ($fotos) { 
            //redirect dengan pesan sukses 
            return redirect()->route('myprojects.index')->with(['success' => 'Data Berhasil Dihapus!']); 
        } else { 
            //redirect dengan pesan error 
            return redirect()->route('myprojects.index')->with(['error' => 'Data Gagal Dihapus!']); 
        } 
    } 
}