<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Posts;
use App\Category;
use App\Tags;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Posts::paginate(10);
        return view('admin.post.index', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tags::all();
        $category = Category::all();
        return view('admin.post.create', compact('category','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'category_id' => 'required',
            'body' => 'required',
            'gambar' => 'required'
        ]);

        $gambar = $request->gambar;
        $new_gambar = time().$gambar->getClientOriginalName();

        $post = Posts::create([
            'judul' => $request->judul,
            'category_id' =>  $request->category_id,
            'body' =>  $request->body,
            'gambar' => 'public/uploads/posts/'.$new_gambar,
//            'slug' => Str::slug($request->judul),
            'slug' => $this->createSlug($request->judul),
            'users_id' => Auth::id()
        ]);

        $post->tags()->attach($request->tags);

        $gambar->move('public/uploads/posts/', $new_gambar);
        return redirect()->back()->with('success','Postingan anda berhasil disimpan');
    }
    public function createSlug($title, $id = 0)
    {
        $slug = Str::slug($title);
        $allSlugs = $this->getRelatedSlugs($slug, $id);
        if (! $allSlugs->contains('slug', $slug)){
            return $slug;
        }

        $i = 1;
        $is_contain = true;
        do {
            $newSlug = $slug . '-' . $i;
            if (!$allSlugs->contains('slug', $newSlug)) {
                $is_contain = false;
                return $newSlug;
            }
            $i++;
        } while ($is_contain);
    }
    protected function getRelatedSlugs($slug, $id = 0)
    {
        return Posts::select('slug')->where('slug', 'like', $slug.'%')
            ->where('id', '<>', $id)
            ->get();
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Posts $posts)
    {
        return new PostResource($posts);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::all();
        $tags = Tags::all();
        $post = Posts::findorfail($id);
        return view('admin.post.edit', compact('post','tags','category'));
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
         $this->validate($request, [
            'judul' => 'required',
            'category_id' => 'required',
            'body' => 'required'
         ]);



        $post = Posts::findorfail($id);

        if ($request->has('gambar')) {
            $gambar = $request->gambar;
            $new_gambar = time().$gambar->getClientOriginalName();
            $gambar->move('public/uploads/posts/', $new_gambar);

        $post_data = [
            'judul' => $request->judul,
            'category_id' =>  $request->category_id,
            'body' =>  $request->body,
            'gambar' => 'public/uploads/posts/'.$new_gambar,
            'slug' => Str::slug($request->judul)
        ];
        }
        else{
        $post_data = [
            'judul' => $request->judul,
            'category_id' =>  $request->category_id,
            'body' =>  $request->body,
            'slug' => Str::slug($request->judul)
        ];
        }


        $post->tags()->sync($request->tags);
        $post->update($post_data);


        return redirect()->route('post.index')->with('success','Postingan anda berhasil diupdate');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Posts::findorfail($id);
        $post->delete();

        return redirect()->back()->with('success','Post Berhasil Dihapus (Silahkan cek trashed post)');
    }

    public function tampil_hapus(){
        $post = Posts::onlyTrashed()->paginate(10);
        return view('admin.post.hapus', compact('post'));
    }

    public function restore($id){
        $post = Posts::withTrashed()->where('id', $id)->first();
        $post->restore();

        return redirect()->back()->with('success','Post Berhasil DiRestore (Silahkan cek list post)');
    }

    public function kill($id){
        $post = Posts::withTrashed()->where('id', $id)->first();
        $post->forceDelete();

        return redirect()->back()->with('success','Post Berhasil Dihapus Secara Permanen');
    }
}
