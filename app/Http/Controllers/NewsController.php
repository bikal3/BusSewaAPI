<?php

namespace App\Http\Controllers;


use App\Quotation;
use DB;

use App\Model\News;
use App\Http\Resources\News\NewsResource;
use App\Http\Requests\NewsRequest;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        //
    //    return DB::table('news')->get();
       return response([
        'newslist'=>DB::table('news')->get()
    ]);
//     $users = DB::table('news')->get();

// foreach ($users as $user)
// {
//     var_dump($user->title);
// }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    {
        //
        $news= new News;
        DB::insert('insert into news (id, title) values (?, ?)', [
            $news->id=$request->id,
            $news->title= $request->title
        ]);
        DB::commit();
        // return $request ->all();
        return response([
            'data'=>new NewsResource($news)
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return News::find($id);
        // return new NewsResource(News::find($id));
    //    $id=
    //     $news= DB::select('select * from news where id = :id');
    //     $news->execute([':id'=>$id]);
    //     return $news;
        // $news = DB::table('news')->where('id', '1')->pluck('id');
        // return $news;
//         $news = DB::table('news')->select ('title')->where('id', $id)->first();

// return $news->title;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //
    }
}
