<?php

namespace App\Http\Controllers;
use App\City;
use App\Country;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;

class HomeControllers extends Controller
{
    public function index(Request $request){
//
//        Cache::put('Test','Value',60);
//        dump(Cache::get('Test'));

//        Cache::put('Test 1','Value 1');
//        dump(Cache::get('Test 1'));

//        Cookie::queue('test 1','Test cookie 1',1);
//        dump(Cookie::get('test 1'));

//        $request->session()->put('Text','Text value');
//        session(['Cart'=>[
//            ['id'=>1, 'title'=>'Product 1'],
//            ['id'=>2, 'title'=>'Product 2'],
//            ['id'=>3, 'name' => 'Nikita', 'password' => 'qwerty'],
//            ['id'=>4, 'name'=>'Egor', 'lastName'=>'Danchenko'],
//        ]]);

//        $request->session()->push('Cart',['id'=>7,'name'=>'Nikita','lastName'=>'Tishunets']);
//        dump($request->session()->pull('Text'));
//
//        $request->session()->forget(['id'=>1]);
//
//        $request->session()->flush();
//
//
//
//        dump(session()->all());


//        dump(session('test'));
//        dump(session('Cart')[1]['title']);
//        $posts = Post::all();
//        return view('home',compact($posts));
        return view('home');
    }

    public function bd(){
        $posts = new Post();
        $posts->title = "Post 6";
        $posts->content = "Content post 6";
        $posts->rubric_id = 2;
        $posts->save();


        dump($posts);
    }

    public function database(){
//        $query = DB::insert("INSERT INTO posts (title, content,created_at, updated_at) VALUES (?,?,?,?)",["Статья 1", "контент 1", NOW(),NOW()]);
//        dump($query);
//        DB::update("UPDATE posts SET updated_at = ?, created_at = ?
//             WHERE updated_at IS NULL OR created_at IS NULL",[Now(),NOW()]);
//        DB::delete("DELETE FROM posts WHERE id = ?",[5]);
//        $posts = DB::select("SELECT * FROM posts");
//        return $posts;


        //конструктор запросов
//        $data = DB::table('country')->select('Code','Name','Continent')->limit(5)->get();
//        $data = DB::table('country')->select('Code','Name','Continent')->first();
//        $data = DB::table('city')->select('ID','Name')->find(
//            2
//        );
//        $data = DB::table('country')->limit(10)->pluck('Name','Code');
//        $data = DB::table('city')->select('city.ID','city.Name as city_name','country.Code','country.Name as country_name')->limit(5)->join('country','city.CountryCode','=','country.Code')->get();
//        dd($data);
        //модели ORM
//        $post = new Post();
//        $post->title = 'Статья';
//        $post->content = 'Контент';
//        $post->save();

//        $data = Country::all();
//        $data = Country::limit(5)->get();
//        $data = Country::where('Code','<','ALB')->limit(2)->offset(1)->get();
//        $data = City::find(5);
//        $data = Country::find('AGO');
//        dd($data);
//        $post = new Post();
//        $post->title = 'Post 4';
//        $post->content = 'Content post 4';
//        $post->save();
//        Post::create(['title'=>'Post 5','content'=>'Content post 5']);
//        $post = Post::find(10);
//        $post->title = 'Post 3';
//        $post->content = 'Content post 3';
//        $post->save();
//        Post::where('id','>',3)->update(['updated_at'=>NOW()]);
//        $post = Post::find(1);
//        $post->delete();
//        Post::destroy(9);

//        $post = Post::find(11);
//        dd($post->rubric->title);


        $post = Post::all();
        dd($post);
    }

    public function store(Request $request)
    {
        return redirect()->route('home');
    }

    public function create(){
        return view('create');
    }

    public function test(){
        return __METHOD__;
    }
}
