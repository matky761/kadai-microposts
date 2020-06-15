<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    /**
     * 投稿をお気に入りにするアクション
     * 
     * @param $id 対象の投稿のid
     * @return \Illuminate\Http\Request
     */
    public function store($id)
    {
        \Auth::user()->favorite($id);
        
        return back();
    }
    
    /**
     * 投稿をお気に入りから解除するアクション
     * 
     * @param $id 対象の投稿のid
     * @return \Illuminate\Http\Request
     */
    public function destroy($id)
    {
        \Auth::user()->unfavorite($id);
        
        return back();
    }
}
