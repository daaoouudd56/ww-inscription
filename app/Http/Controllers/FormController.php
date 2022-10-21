<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Rap2hpoutre\FastExcel\FastExcel;

class FormController extends Controller
{
    public function form(){
        return view('form');
    }

    public function store(Request $request){

        $formations= array("", "", "");
        $i=0;
        for ($x = 1; $x < 24; $x++){
            if ($request['formation'.$x]!= null){
                $formations[$i]=$request['formation'.$x];
                $i++;
                if($i==3){
                    $x=24;
                }
            }
        }
        
        DB::table('inscription')->insert([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'statut' => $request->gender,    
            'numero' => $request->numero,
            'date_naissance'=> $request->naissance,
            'lieu_naissance'=> $request->lieu,
            'email'=> $request->email,
            'formation_a'=> $formations[0],
            'formation_b'=> $formations[1],
            'formation_c'=> $formations[2],
            'profession'=> $request->Profession,
            'niveau'=> $request->Niveau_Scolaire,
            'maladies'=> $request->maladies,
            'urgence'=> $request->urgence,
            'paiement'=> $request->paiement,

        ]);
        /*$exportToExcel = DB::table('inscription')->get();
        (new FastExcel($exportToExcel))->download('file.xlsx');*/ 

            /*return view('show', [
                'name'=>$request->name,
                'mail'=>$request->mail,
                'phone'=>$request->phone,
                'formation'=>$request->formation
            ]);*/
            return redirect('show');
    }

    public function show(){
        $students = DB::table('inscription')->get();
        return view('show',['students'=>$students]);
    }
    public function login(){
        return view('login');
    }
}
