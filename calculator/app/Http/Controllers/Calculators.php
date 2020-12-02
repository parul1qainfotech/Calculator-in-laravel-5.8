<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Calculators extends Controller
{

    function cal(){
        
        return view('operation');
    }

    function inputcal(Request $req){
       $field=$req->input;
       return view('operation',['data'=>$field]);

    }

    function myoperation(Request $req){
        $data=$req->input;
        echo $data;
       switch($req->operation){
           
         //for addition 

        case '+':
            for($i=1;$i<$i+1;$i++)
        {   
            $temp=$req->input.$i;
            $res=$temp;
            
            for($j=$i+1;$j<=$data;$j++){
                
               $res+=$req->input.$j;
               
            }
        break;
         
        }
         
        break;


        //subtract 
            case '-':
                for($i;$i<$i+1;$i++)
            {   
                $temp=$req->input.$i;
                $res=$temp;
                for($j=$i+1;$j<$data;$j++){
                    
                    $res-=$req->input.$j;
                    
                }
            break;
           
            }
           
            break;


         //for divide     
            case '/':
                for($i;$i<$i+1;$i++)
            {   
                $temp=$req->input.$i;
                $res=$temp;
                for($j=$i+1;$j<$data;$j++){
                    
                    $res/=$req->input.$j;
                    
                }
            break;
         
            }
            break;


                //for multiplication 
            case '*':
                for($i;$i<$i+1;$i++)
            {   
                $temp=$req->input.$i;
                $res=$temp;
                for($j=$i+1;$j<$data;$j++){
                    
                    $res*=$req->input.$j;
                    
                }
            break;
        
            }
            break;

       }
         

    }


   
    
}
