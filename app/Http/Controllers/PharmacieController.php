<?php

namespace App\Http\Controllers;

use App\Models\Vente;
use App\Models\User;


use App\Models\Medicaments;
use Illuminate\Http\Request;

class PharmacieController extends Controller
{
    public function contruct (){
       $this->middleware ('auth');
    }
    public function home (){
       
        $medocs = Medicaments::all();

        return view ('pharmacie.accueil', compact('medocs'));
        /* return view ('pharmacie.accueil', [
            'medocs'=>$allmedocs
        ]); */
    }

    public function delete ($id){
          $supprimer = Medicaments::find($id);
          $supprimer-> delete ();
          return redirect()->back();
    }

    public function contact () {
        return view ('pharmacie.contact');
    }
       

    public function vente (){
        $ventes = Vente:: all();
        return view ('pharmacie.vente', compact('ventes'));
    }
      
    public function addmedoc(){
        return view('pharmacie.addmedoc');
    }

    public function medsave(Request $request){
        if (!empty($request->designation) and !empty($request->description) and !empty($request->qte) and !empty($request->prix)){
            medicaments::create([
                'designation'=>$request->designation,
                'description'=>$request->description,
                'stock'=>$request->qte,
                'prix'=>$request->prix,
                'created_at'=>now()
    
            ]);
    
            //return view ('pharmacie.accueil');
            return redirect()->back();
        }
        else{
            echo "Veuillez remplir tous les champs!";
            
        }
       
    } 


    public function list (){
        return view ('pharmacie.listepharmacien');
    }

    public function salemedoc(){
        return view ('pharmacie.salebtn');
    }

    public function facture (Request $request){
        if (!empty($request->produit) and !empty($request->pu) and !empty($request->qtevendue)){
            
            Vente::create([
                'designation'=>$request->produit,
                'pu'=>$request->pu,
                'qtevendue'=>$request->qtevendue,
            ]);
    
            $designation = $request->produit;
            $pu = $request->pu;
            $qtevendue = $request->qtevendue;
            $qtetotal = $pu*$qtevendue;
    
            return view ('pharmacie.facture', compact('designation', 'pu', 'qtevendue', 'qtetotal'));
        }
        else{
            echo "Vous avez certainement laissé un champs vide. Veuillez bien vérifier!";
             
        }
        
    }
    /*public function facturefn(){

        return view ('pharmacie.facture');
        return redirect()->back();
        
    }*/

    public function update(Request $request){
        if(!empty($request->mailmodify) and !empty($request->passmodify) and !empty($request->save)){
           
            $user = User::updated([
               'name'=> $request->mailmodify,
               'email'=> $request->passmodify
           ]);
               

           return view ('pharmacie.updatesucces');
           




            
        }
        else{
            return view ('pharmacie.updatedprofil');
        }
       

        
    }

    public function details($id){

        $detail= Medicaments::findorfail($id);




        return view ('pharmacie.details', [
            'details'=>$detail
        ]);
    }








}
