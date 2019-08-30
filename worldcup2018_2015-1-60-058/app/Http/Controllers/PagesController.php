<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Http\Redirect;
//use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
//use App\Http\Requests\TicketFormRequest; // model er jonno
//use App\Ticket; // controller model file acess pawar jonno
use App\Team;
use App\Match;
use App\Player;
use DB;
use Session;
session_start();

class PagesController extends Controller
{
     public function home(){
    	return view('home1');//page name
    }
     public function story1(){
        return view('story1');//page name
    }
    

    public function stadium(){

        $allstadium_info=DB::table('stadiums')->get();//getting all values of stadium table from database

        $manage_stadium=view('stadium')->with('stadium_info',$allstadium_info);//here stadium info is a key name

        return view('master')->with('stadium',$manage_stadium);//returning main adminLayout pg with  
    }

    public function team(){

       $team=Team::all();

        
        $manage_team=view('team')->with('team_info',$team);//here stadium info is a key name

        return view('master')->with('team',$manage_team);//returning main adminLayout pg with  admin_stadium_show
        //$allstadium_info=DB::table('stadiums')->get();//getting all values of stadium table from database

        //$manage_stadium=view('stadium')->with('stadium_info',$allstadium_info);//here stadium info is a key name

       // return view('master')->with('stadium',$manage_stadium);//returning main adminLayout pg with  
    }
    

     public function player(){

       $player=Player::all();

        
        $manage_player=view('player')->with('player_info',$player);//here stadium info is a key name

        return view('master')->with('player',$manage_player);//returning main adminLayout pg with  admin_stadium_show
        //$allstadium_info=DB::table('stadiums')->get();//getting all values of stadium table from database

        //$manage_stadium=view('stadium')->with('stadium_info',$allstadium_info);//here stadium info is a key name

       // return view('master')->with('stadium',$manage_stadium);//returning main adminLayout pg with  
    }

    public function match(){

       $match=match::all();

        
        $manage_match=view('match')->with('match_info',$match);//here stadium info is a key name

        return view('master')->with('match',$manage_match);//returning main adminLayout pg with  admin_stadium_show
        //$allstadium_info=DB::table('stadiums')->get();//getting all values of stadium table from database

        //$manage_stadium=view('stadium')->with('stadium_info',$allstadium_info);//here stadium info is a key name

       // return view('master')->with('stadium',$manage_stadium);//returning main adminLayout pg with  
    }
   /* public function about(){
    	return view('about');
    }

    public function contact(){
    	return view('contact');
    }

    public function master(){
    	return view('master');
    }

    public function masterEx(){
    	return view('masterExtend');
    }
    */

}
