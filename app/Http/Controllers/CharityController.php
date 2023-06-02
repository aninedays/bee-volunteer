<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Charity;
use App\Models\Organization;
use App\Models\Type;
use Illuminate\Http\Request;


class CharityController extends Controller
{
    //Untuk Tampilan Umum
    public function charity()
    {
        $charity = Charity::latest()->paginate(9);
        //mengirim data ke view charity
        return view('charities.charity', compact('charity'));
    }

    public function show($id)
    {
        return view('charities.detailCharity');
    }

    //Ini untuk dashboard
    public function index()
    {
        $charity = Charity::latest()->paginate(10); //mengambil data yg terbaru dr kelas model Charity
        //mengirim data ke view charity
        return view('dashboard.charity.index', compact('charity'));
    }

    //Untuk menampilkan halaman tambah data
    public function create()
    {
        $organization = Organization::all();
        $type = Type::all();
        $category = Category::all();
        $charity = Charity::all();
        return view('dashboard.charity.create', compact('organization', 'category', 'type', 'charity'));
    }

    //Untuk menambahkan data
    public function store(Request $request)
    {
        //return $request->file('charity_img')->store('charity-img');

        $this->validate($request, [
            'charity_title' => 'required',
            'charity_excerpt' => 'required',
            'charity_img' => 'image|file|mimes:png,jpg,jpeg',
            'charity_location' => 'required'
        ]);

        $charity = Charity::create([
            'organization_id' => $request->organization_id,
            'type_id' => $request->type_id,
            'category_id' => $request->category_id,
            'charity_img' => $request->charity_img,
            'charity_title' => $request->charity_title,
            'charity_excerpt' => $request->charity_excerpt,
            'charity_desc' => $request->charity_desc,
            'charity_location' => $request->charity_location,
            'charity_date' => $request->charity_date
        ]);

        if ($charity) {
            //redirect dengan pesan sukses
            return redirect('/dashboard-charity')->with(['success' => 'Data Berhasil Ditambahkan!']);
        } else {
            //redirect dengan pesan error
            return redirect('/dashboard-charity')->with(['error' => 'Data Gagal Ditambahkan!']);
        }
    }

    //Untuk menampilkan halaman edit
    public function edit($id)
    {
        $organization = Organization::all();
        $type = Type::all();
        $category = Category::all();
        $charity = Charity::all();
        $charity =  Charity::findorFail($id);
        return view('dashboard.charity.edit', compact('organization', 'category', 'type', 'charity'));
    }

    //Untuk melakukan edit data
    public function update($id, Request $request)
    {
        $this->validate($request, [
            'charity_title' => 'required',
            'charity_excerpt' => 'required',
            'charity_location' => 'required'
        ]);

        $charity = Charity::findorFail($id);

        $charity->update([
            'organization_id' => $request->organization_id,
            'type_id' => $request->type_id,
            'category_id' => $request->category_id,
            'charity_img' => $request->charity_img,
            'charity_title' => $request->charity_title,
            'charity_excerpt' => $request->charity_excerpt,
            'charity_desc' => $request->charity_desc,
            'charity_location' => $request->charity_location,
            'charity_date' => $request->charity_date
        ]);

        if ($charity) {
            //redirect dengan pesan sukses
            return redirect('/dashboard-charity')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect('/dashboard-charity')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    //Untuk Menghapus Data
    public function destroy($id)
    {
        $charity = Charity::findorFail($id);
        $charity->delete();

        if ($charity) {
            //redirect dengan pesan sukses
            return redirect('/dashboard-charity')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect('/dashboard-charity')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }

    //Untuk Mencari Data
    public function search(Request $request)
    {
        $search = $request->search;

        //Mengambil data
        $charity = Charity::all()
            ->where('charity_title', 'like', "%" . $search . "%")
            ->paginate();

        return view('charities.search', compact('charity'));
    }
}
