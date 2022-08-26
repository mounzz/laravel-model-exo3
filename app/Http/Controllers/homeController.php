<?php

namespace App\Http\Controllers;

use App\Models\membres;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function homeController(){
        $generalCount = membres::all() -> count();
        $membres = membres::all();
        $femmes = membres::all() -> where('genre', '=' ,'Femme');
        $hommes = membres::all() -> where('genre', '=' ,'Homme');
        $hommesEnCondition = membres::all()
        -> where('genre', "=", "Homme")
        -> whereBetween('age', [18, 24]);
        $femmesEnCondition = membres::all()
        -> where('genre', "=", "Femme")
        -> whereBetween('age', [18, 24]);
        $horsCondition = membres::all()
        -> whereNotBetween('age', [18, 24]);
        return view("home", compact('generalCount', 'membres', 'femmes', 'hommes', 'hommesEnCondition', 'femmesEnCondition', 'horsCondition'));
    }
}
