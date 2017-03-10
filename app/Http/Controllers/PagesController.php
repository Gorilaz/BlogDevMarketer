<?php

namespace App\Http\Controllers;

use App\Post;

class PagesController extends Controller{
    
    public function getContact(){
        
        return view('pages.contact');       
    }
    
     public function getAbout(){
        $first = "sert";
        $lname = "gavril";
        $fullname = $first . " " . $lname;
        $email = "sergs@msaf.ru";
        return view('pages.about')->withFullname($fullname)->withEmail($email);
    }
    
    public function getIndex(){
     $posts = Post::orderBy('created_at','desc')->limit(4)->get();   
     return view('pages.welcome')->withPosts($posts);
     
    }
    
 
}
