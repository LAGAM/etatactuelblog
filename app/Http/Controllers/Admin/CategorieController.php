<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Categorie;

class CategorieController extends Controller
{
    public function getFormCategorie() {
        return view ('admin.categorie');
    }
     public function postFormCategorie(Request $request) {

        $validator = Validator::make($request->all(), [
            'nom' => ['required', 'string', 'max:255']
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withError($validator)->withInput();
        } else {
            $attributs = [
                'nom' => $request->nom,
            ];

           $categorie = Categorie::create($attributs); 
       


            if ($categorie) {
               // flash('Opération réalisée avec succès !')->success();
                return redirect()->route('admin.dashboard');
            } else {
               //  flash('Opération non effectuée !')->error();
                return redirect()->route('admin.categorie');
            }
            
        }
        
     }
}
