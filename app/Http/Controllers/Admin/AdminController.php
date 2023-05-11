<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Post;
use App\Models\Reservation;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {

        $menus = Menu::all();
        $reservations_today = Reservation::whereDate('res_date', Carbon::today())
            ->where('status', 'confirmed')
            ->get();
        $reservations_pending = Reservation::where('status', 'pending')->get();
        $posts = Post::where('is_published', '1')->get();
        $rencent_posts = Post::where('created_at', '>=', Carbon::now()->subDay(7))->get();
        $total_customers = User::where('utype', 'CUS')->count();
        return view('admin.index', [
            'menus' => $menus,
            'reservations_today' => $reservations_today,
            'reservations_pending' => $reservations_pending,
            'posts' => $posts,
            'rencent_posts' => $rencent_posts,
            'total_customers' => $total_customers
        ]);
    }
}
