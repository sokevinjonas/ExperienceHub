<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserRole;
use App\Models\UserPermission;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\RegisteredUserRequest;
use App\Http\Requests\StoreUserPermissionRequest;
use App\Http\Requests\UpdateUserPermissionRequest;

class UserPermissionController extends Controller
{
    public function listModerateur(){
        return view('admin.moderateur.listes');
    }
    public function storeModerateur(RegisteredUserRequest $request):RedirectResponse
    {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);
        $data['role_id'] = UserRole::getModeratorRole()->id;
        $user = User::create($data);

        return redirect()->back();
    }
    public function allModera()
    {
        $moderatorRoleId = UserRole::getModeratorRole()->id;
        $moderators = User::where('role_id', $moderatorRoleId)->get();
        return view('admin.moderateur.listes', compact('moderators'));
    }
}
