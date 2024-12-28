<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index(Request $request)
    {
        return view("imageUpload");
    }

    public function store(Request $request)
    {
        $request->validate([
            "image" => "required|image"
        ]);

        $imagePath = $request->image->store("images", "public");

        return back()->with("success", "Image Stored.")->with("imagePath", $imagePath);
    }
}
