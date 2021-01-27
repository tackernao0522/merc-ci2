<?php

namespace App\Http\Controllers\MyPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SoldItemsController extends Controller
{
    public function showSoldItems()
    {
        $user = Auth::user();

        $items = $user->soldItems()->orderBy('id', 'DESC')->get();
        // dd($items);

        return view('mypage.sold_items', ['items' => $items]);
    }
}
