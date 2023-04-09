<?php

namespace App\Http\Controllers\Personal\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Support\Str;

class IndexController extends Controller
{
	public function __invoke()
	{
		// $data['userName'] = Str::title(auth()->user()->name);
		// $data['usersCount'] = User::all()->count();
		// $data['postsCount'] = Post::all()->count();
		// $data['categoriesCount'] = Category::all()->count();
		// $data['tagsCount'] = Tag::all()->count();

		// return view('personal.main.index', compact('data'));
		return view('personal.main.index');
	}
}
