<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function soma(){
        
       return view ('soma');
        
    }
    public function sub(){
        
        return view ('sub');
         
     }

     public function multip(){
        
        return view ('multip');
         
     
    }
     public function divisao(){
        
        return view ('divisao');
         
     
    }
     
    public  function  calcularSoma (Request  $request ){
    
        $valor1= $request->primeirovalor ; 
        $valor2= $request->segundovalor ;
        $resultado = $valor1 + $valor2 ;

        return  view ( 'resultsoma' , compact ( 'valor1' , 'valor2' , 'resultado' ));

    }
    public  function  calcularSub (Request  $request ){
    
        $valor1= $request->primeirovalor ; 
        $valor2= $request->segundovalor ;
        $resultado = $valor1 - $valor2 ;

        return  view ( 'resultsub' , compact ( 'valor1' , 'valor2' , 'resultado' ));
    }
     public  function  calcularMultip (Request  $request ){
    
         $valor1= $request->primeirovalor ; 
         $valor2= $request->segundovalor ;
         $resultado = $valor1 * $valor2 ;
    
         return  view ( 'resultmulti' , compact ( 'valor1' , 'valor2' , 'resultado' ));
        }
    
    public function calcularDivisao (Request $request){

        $valor1= $request->primeirovalor ; 
         $valor2= $request->segundovalor ;
         $resultado = $valor1 / $valor2 ;
    
         return  view ( 'resultdiv' , compact ( 'valor1' , 'valor2' , 'resultado' ));
    }
    public function operacoes(Request $request){
        return view ('operacoes');
    }
    
     
}