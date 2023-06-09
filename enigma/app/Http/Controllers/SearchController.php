<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        // Perform the search query on the User model
        $users = User::where('name', 'like', '%' . $query . '%')
            ->where('id', '!=', auth()->user()->id) // Exclude the current authenticated user
            ->get();

        return response()->json(['users' => $users]);
    }
}
