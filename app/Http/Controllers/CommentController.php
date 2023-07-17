<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
    public function index()
    {
        $comments = DB::table('comments')->get();
        return view('cp.comments', compact('comments'));
    }
}
