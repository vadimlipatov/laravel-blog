<?php

namespace App\Http\Controllers\Personal\Comment;

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
		$comments = auth()->user()->comments;
		// dd($comments);
		return view('personal.comment.index', compact('comments'));
	}
}
