<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Kris\LaravelFormBuilder\FormBuilder;
use Kris\LaravelFormBuilder\Field;
use Spatie\Permission\Models\Role;

class ProfileController extends Controller
{
    //

    public function roles()
    {
        $roles = Role::all();

    }


    public function profiles()
    {
        $profiles = Profile::with(['appeals'])->paginate();
        ddd($profiles);
    }




}
