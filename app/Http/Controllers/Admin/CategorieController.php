<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Categorie;

class CategorieController extends Controller
{
    public function getFormCategorie() {

        $data['categories'] = Categorie::all();
        return view ('admin.categorie')->with($data);
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
                return redirect()->route('admin.categorie');
            } else {
               //  flash('Opération non effectuée !')->error();
                return redirect()->back()('admin.categorie');
            }
            
        }
        
     }
}
