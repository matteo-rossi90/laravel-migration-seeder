<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Train;

class PageController extends Controller
{
    public function index(){

        $title = 'HOME';

        $text = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.
        Ab veritatis cum maxime atque quam nostrum eveniet animi deserunt dolores, asperiores
        temporibus repudiandae facere ad voluptates. Iure esse nostrum inventore, minus vero officia
        cupiditate laborum animi ad dicta id eos sapiente modi labore est iusto?
        Dolorum sed id ipsum laudantium consectetur!';

        return view('home', compact('title', 'text'));
    }

    public function about()
    {
        return view('about');
    }

    public function contacts()
    {
        return view('contacts');
    }

    public function trains()

    {
        $list_trains = Train::where('departure_date', '2024-09-12')->get();
        return view('trains', compact('list_trains'));
    }
}
