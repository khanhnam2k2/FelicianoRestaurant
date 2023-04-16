<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactStoreRequest;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Menu;
use App\Models\Post;
use App\Models\Slide;
use App\Models\Team;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        // $menus = Menu::all();
        $categories = Category::all();
        $teams = Team::inRandomOrder()->get();
        $specials = Category::where('name', 'Specials')->first();
        $slides = Slide::where('terms', 1)->get();
        $posts = Post::where('is_published', '1')->orderBy('created_at', 'desc')->get();

        return view('welcome', [
            'teams' => $teams,
            'categories' => $categories,
            'specials' => $specials,
            'slides' => $slides,
            'posts' => $posts
        ]);
    }
    public function about()
    {
        $teams = Team::inRandomOrder()->get();
        return view('about', compact('teams'));
    }
    public function services()
    {
        return view('services');
    }
    public function ourTeam()
    {
        $teams = Team::inRandomOrder()->get();
        return view('ourTeam', compact('teams'));
    }
    public function contact()
    {
        return view('contact');
    }
    public function storeContact(ContactStoreRequest $request)
    {
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);
        return to_route('thankyou');
    }




    public function thankyou()
    {
        return view('thankyou');
    }
}
