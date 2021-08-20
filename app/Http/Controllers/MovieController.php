<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function showaction() {

        
        $data = Movie::all();

        return view('actionMovies',['showmovies'=>$data]);

    }

    public function showscience() {

       
        $data = Movie::all();

        return view('scienceficMovies',['showmovies'=>$data]);

    }

    public function showhorror() {

       
        $data = Movie::all();

        return view('horrorMovie',['showmovies'=>$data]);

    }

    public function searchmovie($id) {

        $data = Movie::find($id);

        return view('searchMovie',['searchdata'=>$data]);
    }

    public function search(Request $req) {

        $data = new Movie;
        $data->sname=$req->mname;
        
        return view('s',['search'=>$data]);
    }

}


