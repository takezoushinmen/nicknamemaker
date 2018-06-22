<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nickname;
class NicknameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
        return view('welcome');
    } 
    
        public function start()
    {
        return view('start');
    } 
    
    public function index()
    {
        $name1 = array ('封印されし' , '解き放たれし' , '蘇りし' , '眠れる' , '知られざる', 'とらわれし' , '世界を統べる' , '闇に生きる', '悲しみを知った' , '孤独なる' , '邪悪なる' , '呪われし');
        $name2 = array ('暗黒の' , '闇の' , 'いにしえの' , '漆黒の' , '光の', '天上の' , '最強の' , '永遠の' , '二次元の', '宇宙の' , '悪の' , '二子玉の' , '地獄の' , '呪いの', '全裸の');
        $name3 = array ('使徒' , '王' , '神', '鬼' , '覇者', '魔物' , '堕天使' , '竜' , 'お母さん' , '使者' , '鬼神' , 'ニート' , '民' , '住人' , '悪魔' , '獣' , 'おっさん' , '虫', 'ハンター');
  
        $name_rand1 = $name1[array_rand($name1, 1)];
        $name_rand2 = $name2[array_rand($name2, 1)];
        $name_rand3 = $name3[array_rand($name3, 1)];
        
        $data = [
            'name_rand1' => $name_rand1,
            'name_rand2' => $name_rand2,
            'name_rand3' => $name_rand3
            ];
            
        $randname =  "$name_rand1 $name_rand2 $name_rand3";
        
        $nickname = new Nickname;
        $nickname->nickname = $randname;
        $nickname->save();
        
        return view('index', $data); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function history()
    {
        $items = Nickname::where('nickname','!=','')->orderBy('created_at', 'desc')->take(300)->get();
        
        return view('history', ['items' => $items]); 
    }
     
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
