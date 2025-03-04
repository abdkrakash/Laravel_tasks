<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return response()->make('
            <div style="background-color: #fff3e6; padding: 30px; border-radius: 10px; text-align: center; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);">
                <h1 style="color: #ff6f00;">Welcome to Orange Academy!</h1>
                <p style="color: #333; font-size: 18px;">Here you can find all the posts related to our programs and Coach Amr\'s teachings.</p>
            </div>
        ', 200);
    }

    public function create()
    {
        return response()->make('
            <div style="background-color: #fff3e6; padding: 30px; border-radius: 10px; text-align: center; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);">
                <h1 style="color: #ff6f00;">Create a New Post</h1>
                <p style="color: #333; font-size: 18px;">Ready to create a new post? Share your thoughts, experiences, or knowledge related to Orange Academy and Coach Amr\'s guidance!</p>
            </div>
        ', 200);
    }

    public function store(Request $request)
    {
        return response()->make('
            <div style="background-color: #fff3e6; padding: 30px; border-radius: 10px; text-align: center; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);">
                <h1 style="color: #ff6f00;">Post Saved Successfully!</h1>
                <p style="color: #333; font-size: 18px;">Your post has been successfully created! Thank you for contributing to the Orange Academy community, with insights inspired by Coach Amr.</p>
            </div>
        ', 200);
    }

    public function show($id)
    {
        return response()->make('
            <div style="background-color: #fff3e6; padding: 30px; border-radius: 10px; text-align: center; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);">
                <h1 style="color: #ff6f00;">Post with ID: ' . $id . '</h1>
                <p style="color: #333; font-size: 18px;">Displaying the post with ID: ' . $id . '. This could be a highlight from Orange Academy\'s latest sessions with Coach Amr.</p>
            </div>
        ', 200);
    }

    public function edit($id)
    {
        return response()->make('
            <div style="background-color: #fff3e6; padding: 30px; border-radius: 10px; text-align: center; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);">
                <h1 style="color: #ff6f00;">Edit Post with ID: ' . $id . '</h1>
                <p style="color: #333; font-size: 18px;">Update the content with the latest insights or tips from Coach Amr and Orange Academy.</p>
            </div>
        ', 200);
    }

    public function update(Request $request, $id)
    {
        return response()->make('
            <div style="background-color: #fff3e6; padding: 30px; border-radius: 10px; text-align: center; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);">
                <h1 style="color: #ff6f00;">Post Updated!</h1>
                <p style="color: #333; font-size: 18px;">Your post with ID: ' . $id . ' has been successfully updated! Stay tuned for more content related to Coach Amr\'s teachings at Orange Academy.</p>
            </div>
        ', 200);
    }

    public function destroy($id)
    {
        return response()->make('
            <div style="background-color: #fff3e6; padding: 30px; border-radius: 10px; text-align: center; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);">
                <h1 style="color: #ff6f00;">Post Deleted</h1>
                <p style="color: #333; font-size: 18px;">The post with ID: ' . $id . ' has been deleted. We’re sorry to see it go, but the journey at Orange Academy and with Coach Amr continues!</p>
            </div>
        ', 200);
    }
}
