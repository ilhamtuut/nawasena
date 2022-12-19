<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('xss');
        $this->middleware('auth')->except(['news','show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->s;
        $category = $request->c;
        $is_draft = $request->d;
        $data = Blog::when($search, function($query) use ($search){
                $query->where('title','like',$search.'%');
            })
            ->when($search, function($query) use ($is_draft){
                $query->where('is_draft',$is_draft);
            })
            ->when($category, function($query) use ($category){
                $query->whereHas('category', function($q) use ($category) {
                    $q->where('categories.slug',$category);
                });
            })->orderBy('title')->paginate(20);
        return view('pages.backend.blogs.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 20);
    }

    /**
     * Display a listing of the resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function news(Request $request)
    {
        $search = $request->s;
        $category = $request->c;
        $data = Blog::where('is_draft',1)
            ->when($search, function($query) use ($search){
                $query->where('title','like',$search.'%');
            })
            ->when($category, function($query) use ($category){
                $query->whereHas('category', function($q) use ($category) {
                    $q->where('categories.slug',$category);
                });
            })
            ->paginate(5);
        $recents = Blog::where('is_draft',1)->orderBy('created_at','desc')->limit(5)->get();
        $categories = Category::withCount('blogs')->orderBy('name')->get();
        $tags = Blog::selectRaw(DB::raw("GROUP_CONCAT(DISTINCT tags SEPARATOR ';')  AS tags"))->first();
        $tags = explode(';',$tags->tags);
        $tags = array_unique($tags);
        return view('pages.frontend.news', compact('data','categories','tags','recents'));
    }

    public function show(Request $request, $slug)
    {
        $data = Blog::where('slug',$slug)->first();
        if(!$data){
            return redirect()->route('news');
        }
        $recents = Blog::where('is_draft',1)->orderBy('created_at','desc')->limit(5)->get();
        $categories = Category::withCount('blogs')->orderBy('name')->get();
        $tags = Blog::selectRaw(DB::raw("GROUP_CONCAT(DISTINCT tags SEPARATOR ';')  AS tags"))->first();
        $tags = explode(';',$tags->tags);
        $tags = array_unique($tags);
        return view('pages.frontend.detail_new', compact('data','categories','tags','recents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name')->get();
        $tags = Blog::selectRaw(DB::raw("GROUP_CONCAT(DISTINCT tags SEPARATOR ';')  AS tags"))->first();
        $tags = explode(';',$tags->tags);
        $tags = array_unique($tags);
        return view('pages.backend.blogs.add', compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255|unique:blogs,title',
            'category' => 'required|exists:categories,id',
            'cover' => 'required||mimes:jpeg,png,jpg|max:2048',
            'tags' => 'nullable|array',
            'content' => 'required|string',
            'draft' => 'required|string',
        ]);
        if($request->hasFile('cover')){
            $cover = $request->file('cover');
            $cover_name = uniqid().'.'.$cover->getClientOriginalExtension();
            $cover->move('file/images/blogs/',$cover_name);
            Blog::create([
                'user_id' => Auth::id(),
                'category_id' => $request->category,
                'title' => $request->title,
                'cover' => $cover_name,
                'tags' => implode(';',$request->tags),
                'content' => $request->content,
                'is_draft' => $request->draft
            ]);
            $request->session()->flash('success', 'Berhasil menambahkan berita');
            return redirect()->route('blogs.index');
        }

        $request->session()->flash('failed', 'Mohon periksa file cover dan ulangi kembali');
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $blog = Blog::find($id);
        $categories = Category::orderBy('name')->get();
        $tags = Blog::selectRaw(DB::raw("GROUP_CONCAT(DISTINCT tags SEPARATOR ';')  AS tags"))->first();
        $tags = explode(';',$tags->tags);
        $tags = array_unique($tags);
        return view('pages.backend.blogs.edit', compact('categories','blog','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|max:255|unique:blogs,title,'.$id,
            'category' => 'required|exists:categories,id',
            'cover' => 'nullable||mimes:jpeg,png,jpg|max:2048',
            'tags' => 'nullable|array',
            'content' => 'required|string',
            'draft' => 'required|string',
        ]);
        $blog = Blog::find($id);
        if($request->hasFile('cover')){
            $unlink = public_path('file/images/blogs/'.$blog->cover);
            if(file_exists($unlink)){
                unlink($unlink);
            }
            $cover = $request->file('cover');
            $cover_name = uniqid().'.'.$cover->getClientOriginalExtension();
            $cover->move('file/images/blogs/',$cover_name);
            $blog->update([
                'category_id' => $request->category,
                'title' => $request->title,
                'cover' => $cover_name,
                'tags' => implode(';',$request->tags),
                'content' => $request->content,
                'is_draft' => $request->draft
            ]);
        }else{
            $blog->update([
                'category_id' => $request->category,
                'title' => $request->title,
                'tags' => implode(';',$request->tags),
                'content' => $request->content,
                'is_draft' => $request->draft
            ]);
        }        
        $request->session()->flash('success', 'Berhasil memperbaharui berita');
        return redirect()->route('blogs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $blog = Blog::find($id);
        $unlink = public_path('file/images/blogs/'.$blog->cover);
        if(file_exists($unlink)){
            unlink($unlink);
        }
        $blog->delete();
        $request->session()->flash('success', 'Berhasil menghapus berita');
        return redirect()->back();
    }
    
    public function category(Request $request)
    {
        $data = Category::orderBy('name')->paginate(20);
        return view('pages.backend.blogs.category', compact('data'))->with('i', (request()->input('page', 1) - 1) * 20);
    }

    public function category_store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:50|unique:categories,name',
        ]);
        Category::create($request->all());
        $request->session()->flash('success', 'Berhasil menambahkan kategori');
        return redirect()->back();
    }

    public function category_update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|max:50|unique:categories,name,'.$id,
        ]);
        Category::find($id)->update($request->all());
        $request->session()->flash('success', 'Berhasil memperbaharui kategori');
        return redirect()->back();
    }

    public function category_delete(Request $request, $id)
    {
        Category::find($id)->delete();
        $request->session()->flash('success', 'Berhasil menghapus kategori');
        return redirect()->back();
    }
}
