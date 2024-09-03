<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserRole;
use App\Models\UserPermission;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\RegisteredUserRequest;
use App\Http\Requests\StoreUserPermissionRequest;
use App\Http\Requests\UpdateUserPermissionRequest;

class UserPermissionController extends Controller
{
    public function listModerateur(){
        $moderatorRoleId = UserRole::getModeratorRole()->id;
        $moderators = User::where('role_id', $moderatorRoleId)->get();
        return view('admin.moderateur.listes', compact('moderators'));
    }

    public function listUtilisateurs(){
        $moderatorRoleId = UserRole::getUserRole()->id;
        $utilisateurs = User::where('role_id', $moderatorRoleId)->get();
        return view('admin.utilisaleur.listes', compact('utilisateurs'));
    }
    public function storeModerateur(RegisteredUserRequest $request):RedirectResponse
    {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);
        $data['role_id'] = UserRole::getModeratorRole()->id;
        $user = User::create($data);

        return redirect()->back();
    }
    public function updateModerateur(UpdateUserRequest $request, $id):RedirectResponse
    {
        $moderator = User::findOrFail($id);
        dd($moderator->id);
        if ($moderator) {
            $data = $request->validated();
             // Assigner le rôle de modérateur
            $data['role_id'] = UserRole::getModeratorRole()->id;
            $moderator->update($data);
        }

        return redirect()->back()->with('success', 'Modérateur mis à jour avec succès.');
    }
    public function destroy($id)
    {
        $moderator = User::findOrFail($id);
        $moderator->delete();
        return redirect()->back()->with('success', 'Modérateur supprimé avec succès.');
    }


}
