<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\RegistrationRequest;
use App\Models\User;

class StoreController extends Controller
{
    public function __invoke(RegistrationRequest $request)
    {
        $data = $request->validated();

        if (User::where('name', '=', $data['name'])->exists() ) {
            print_r('ИМЯ ЗАНЯТО!');
        }
        if (User::where('email', '=', $data['email'])->exists() ) {
            print_r('email занят!');
        }

        $user = User::create($data);
    }
}
