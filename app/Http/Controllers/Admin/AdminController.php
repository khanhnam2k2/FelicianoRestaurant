<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Reservation;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $time_today = new \DateTime();
        $reservation_today = Reservation::where('res_date', '>', $time_today)->count();
        $posts = Post::where('is_published', 1)->get();
        $count_blog_posted = $posts->count();
        return view('admin.index', [
            'reservation_today' => $reservation_today,
            'count_blog_posted' => $count_blog_posted,
            'posts' => $posts
        ]);
    }
}
