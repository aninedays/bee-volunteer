<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Organization;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function article()
    {
        $article = Article::latest()->paginate(9);
        return view('articles.article')->with('article', $article);
    }

    public function index()
    {
        $article = Article::latest()->paginate(10);
        return view('dashboard.article.index')->with('article', $article);
    }

    //Menampilkan halaman tambah article
    public function create()
    {
        $organization = Organization::all();
        $article = Article::all();
        return view('dashboard.article.create', compact('organization', 'article'));
    }

    //Menambahkan article
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'excerpt' => 'required',
        ]);

        $article = Article::create([
            'organization_id' => $request->organization_id,
            'title' => $request->title,
            'body' => $request->body,
            'excerpt' => $request->excerpt
        ]);

        if ($article) {
            //redirect dengan pesan sukses
            return redirect('/dashboard-article')->with(['success' => 'Data Berhasil Ditambahkan!']);
        } else {
            //redirect dengan pesan error
            return redirect('/dashboard-article')->with(['error' => 'Data Gagal Ditambahkan!']);
        }
    }

    //Menampilkan halaman edit
    public function edit($id)
    {
        $organization = Organization::all();
        $article = Article::all();
        $article = Article::findOrFail($id);
        return view('dashboard.article.edit', compact('organization', 'article'));
    }

    //Untuk melakukan edit data
    public function update($id, Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'excerpt' => 'required'
        ]);

        $article = Article::findOrFail($id);
        $article->update([
            'organization_id' => $request->organization_id,
            'title' => $request->title,
            'body' => $request->body,
            'excerpt' => $request->excerpt
        ]);

        if ($article) {
            //redirect dengan pesan sukses
            return redirect('/dashboard-article')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect('/dashboard-article')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    //Menghapus Data
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        if ($article) {
            //redirect dengan pesan sukses
            return redirect('/dashboard-article')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect('/dashboard-article')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
