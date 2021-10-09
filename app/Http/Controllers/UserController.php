<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\User\CreateUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Http\Requests\User\CreateAdminRequest;
use App\Http\Requests\User\CreateEmployeeRequest;
use App\Http\Requests\User\ChangePasswordRequest;
use App\Http\Requests\User\CreateTechnicianRequest;
use App\Http\Requests\User\CreateAccountantRequest;
use App\Events\UserRegistered;
use Illuminate\Support\Facades\Log;
use App\Services\User\UserService;
/**
 * Class UserController
 * @package App\Http\Controllers
 */
class UserController extends Controller
{
    protected $userService;
    protected $user;

    public function __construct(UserService $userService, User $user){
        $this->userService = $userService;
        $this->user = $user;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        
            return view('home');
    }

    /**
     * @param $school_code
     * @param $role
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function indexOther(){
            return view('home');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function changePasswordGet()
    {
        return view('profile.change-password');
    }

    /**
     * @param ChangePasswordRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function changePasswordPost(ChangePasswordRequest $request)
    {
        if (Hash::check($request->old_password, Auth::user()->password)) {
            $request->user()->fill([
              'password' => Hash::make($request->new_password),
            ])->save();

            return back()->with('status', __('Saved'));
        }

        return back()->with('error-status', __('Passwords do not match.'));
    }


    public function edit($id)
    {
        $user = $this->user->find($id);

        return view('profile.edit', [
            'user' => $user,
        ]);
    }

    
}
