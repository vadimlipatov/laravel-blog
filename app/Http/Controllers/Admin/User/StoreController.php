<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class StoreController extends Controller
{
	public function __invoke(StoreRequest $request)
	{
		$data = $request->validated();

		$password = Str::random(10); // генерация пароля

		$data['password'] = Hash::make($data['password']);

		User::firstOrCreate(['email' => $data['email']], $data);

		return redirect()->route('admin.user.index');
	}
}
