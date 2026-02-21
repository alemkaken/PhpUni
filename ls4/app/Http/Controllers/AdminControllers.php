<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\AdminRols;
use Illuminate\Http\JsonResponse;


class AdminController extends Controller
{

public function isAdmin(string $phone): JsonResponse
{
    $admin = Admin::where('phone', $phone)->first();

    if (!$admin) {
        return response()->json([
            'status' => 'error',
            'message' => 'not admin'
        ], 404);
    }

    $adminRole = AdminRols::where('id', $admin->role_Id)->first();

    if (!$adminRole || (int)$adminRole->status !== 1) {
        return response()->json([
            'status' => 'error',
            'message' => 'not admin'
        ], 403);
    }

    return response()->json([
        'status' => 'success',
        'admin' => [
            'id' => $admin->id,
            'name' => $admin->name,
            'email' => $admin->email,
            'phone' => $admin->phone,
        ],
        'role' => [
            'id' => $adminRole->id,
            'name' => $adminRole->name,
            'permissions' => $adminRole->permissions, 
        ]
    ]);
}
}