<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Database\Console\Migrations\StatusCommand;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables; // Import DataTables here

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::all();
        return view('ecommerce.user.index', compact('users'));
    }
    public function toggleStatus(User $user)
    {
        // Toggle the status
        $user->status = ($user->status == 'active') ? 'inactive' : 'active';
        $user->save();

        return response()->json([
            'status' => 'success',
            'message' => 'User status updated successfully.',
            'data' => [
                'newStatus' => $user->status, // Send back the new status
            ]
        ]);
    }
    public function togglerole(User $user){
        $user->role = ($user->role == '1') ? '0' : '1';
        $user->save();

        return response()->json([
            'status' => 'success',
            'message' => $user->role == '1' ? "user is promoted to admin" : "user is demoted to user",
            'data' => [
                'newRole' => $user->role,
            ]
        ]);
    }

    public function profile()
    {
        return view('ecommerce.user.profile');
    }

    public function setting()
    {
        return view('ecommerce.user.setting');
    }



}
