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

class adminController extends Controller
{
    //

     public function adminCall(){
        return view('admin_home');
    }

    public function admin_stadium(){
        return view('admin_stadium');
    }
    
    public function admin_stadium_display(){
    	//stadium read from database

    	$allstadium_info=DB::table('stadiums')->get();//getting all values of stadium table from database

    	$manage_stadium=view('admin_stadium_show')->with('stadium_info',$allstadium_info);//here stadium info is a key name

        return view('adminLayout')->with('admin_stadium_show',$manage_stadium);//returning main adminLayout pg with  admin_stadium_show page and 
        //$mange_stadium variable  
    }

    //---------------------------------STADIUM PART ---------------------------------------------
    
    //add stadium to database 
    public function add_stadium(Request $request){
    	
    	/*-----ELOQUENT ORM-------*/
    	/*see here we don't have to use the table name ELOQUENT understands auto deu to its table prular and model singular  paradigm
    	$stadium=new Stadium(array(
    		'stadium_name'=>$request->get('stadium_name'),
    		'opened'=>$request->get('opened'),
    		'capacity'=>$request->get('capacity')
    	));

    	 $stadium->save();

    	 return redirect('/save_stadium')->with('status', 'STADIUM IS ADDED TO DATABASE');
    	 */

    	//to use this part have to use ---  use Illuminate\Support\Facades\Redirect; and use DB;

			$data=array();
           // $data['stadium_img']=$request->stadium_img_path;
			$data['stadium_name']=$request->stadium_name;
            $data['stadium_city']=$request->stadium_city;
			$data['opened']=$request->opened;
			$data['capacity']=$request->capacity;

            $file=$request->file('stadium_img');
            
            $filename=$request->stadium_name.'-'.$request->stadium_city.'.jpg';
            
            $data['stadium_img_path']='img/stadiums/'.$filename;
            if($file){
                Storage::disk('public')->put('img/stadiums/'.$filename , File::get($file));
            }

			DB::table('stadiums')->insert($data);
			Session::put('message','Stadium Added Successfully!!');
			return Redirect::to('/admin stadium');//->with('status', 'STADIUM IS ADDED TO DATABASE');

        
    }
//deleting stadium 

    public function delete_stadium($id){
		DB::table('stadiums')
			->where('id',$id)
			->delete();
		Session::put('message','Deleted Successfully!!!');
		return Redirect::to('/admin stadium display');       


    }
   
   public function edit_stadium($id){
       $stadium_info=DB::table('stadiums')
			->where('id',$id)
			->first();

		$manage_stadium=view('admin_stadium_edit')->with('stadium_info',$stadium_info);//here stadium info is a key name

		return view('adminLayout')->with('admin_stadium_edit',$manage_stadium);
    }


     public function update_stadium(Request $request , $id){
		//echo"$id";
		$data=array();
            $data['stadium_name']=$request->stadium_name;
            $data['stadium_city']=$request->stadium_city;
			$data['opened']=$request->opened;
			$data['capacity']=$request->capacity;
            $file=$request->file('stadium_img');
            
            $filename=$request->stadium_name.'-'.$request->stadium_city.'.jpg';
            
            $data['stadium_img_path']='img/stadiums/'.$filename;
            if($file){
                Storage::disk('public')->put('img/stadiums/'.$filename , File::get($file));
            }

			DB::table('stadiums')
			->where('id',$id)
			->update($data);

			//echo "<pre/>";

			//print_r($data);
			Session::put('message','Stadium Updated Successfully!!');
			return Redirect::to('/admin stadium display');//->with('status', 'STADIUM IS ADDED TO DATABASE');
  


    }
    //------------------------------------------TEAMS----------------------------

    public function admin_team(){
        return view('admin_team');
    }
     public function add_team(Request $request){
        
        /*-----ELOQUENT ORM-------*/
        /*see here we don't have to use the table name ELOQUENT understands auto deu to its table prular and model singular  paradigm
        $stadium=new Stadium(array(
            'stadium_name'=>$request->get('stadium_name'),
            'opened'=>$request->get('opened'),
            'capacity'=>$request->get('capacity')
        ));

         $stadium->save();

         return redirect('/save_stadium')->with('status', 'STADIUM IS ADDED TO DATABASE');
         */

        //to use this part have to use ---  use Illuminate\Support\Facades\Redirect; and use DB;
        $file=$request->file('flag_img');
        $filename=$request->get('country').'-'.$request->get('coach').'.png';
        if($file){
                Storage::disk('public')->put('img/teams/'.$filename , File::get($file));
            }

         $team = new Team(array(
        'country' => $request->get('country'),
        'flag_img_path' => 'img/teams/'.$filename,
        'coach'=> $request->get('coach'),
        'group'=> $request->get('group'),
        'match_played'=> $request->get('match_played'),
        'match_won'=> $request->get('match_won'),
        'match_draw'=> $request->get('match_draw'),
        'match_lose'=> $request->get('match_lose'),
        'goal_diff'=> $request->get('goal_diff'),
        'points'=> $request->get('points')
        ));

        $team->save();

        Session::put('message','Team Added Successfully!!');
        return Redirect::to('/admin_team');//->with('status', 'STADIUM IS ADDED TO DATABASE');
           
        
    }

 public function admin_team_display(){
        //stadium read from database

        $team=Team::all();

        
        $manage_team=view('admin_team_show')->with('team_info',$team);//here stadium info is a key name

        return view('adminLayout')->with('admin_team_show',$manage_team);//returning main adminLayout pg with  admin_stadium_show page and 
        //$mange_stadium variable  
    }
    
public function delete_team($id){
        $team=Team::where('id','=',$id)->get()->delete();
        Session::put('message','Deleted Successfully!!!');
        return Redirect::to('/admin_team_display');       


    }

   public function edit_team($id){
       $team=Team::where('id','=',$id);
       
        $manage_team=view('admin_team_edit')->with('team_info',$team);//here stadium info is a key name

        return view('adminLayout')->with('admin_team_edit',$manage_team);
    }

    public function update_team(Request $request , $id){
        //echo"$id";

        $file=$request->file('flag_img');
        $filename=$request->get('country').'-'.$request->get('coach').'.png';
        if($file){
                Storage::disk('public')->put('img/teams/'.$filename , File::get($file));
            }

        $team=Team::where('id','=',$id);

        $team->country = $request->get('country');
        $team->flag_img_path = 'img/teams/'.$filename;
         $team->coach = $request->get('coach');
         $team->group = $request->get('coach');
         $team->match_played = $request->get('coach');
         $team->match_won = $request->get('match_won');
         $team->match_draw = $request->get('match_draw');
         $team->match_lose = $request->get('match_lose');
         $team->goal_diff = $request->get('goal_diff');
          $team->points = $request->get('points');


        $team-> save();


        //---------
        
            //print_r($data);
            Session::put('message','Stadium Updated Successfully!!');
            return Redirect::to('/admin_team_display');//->with('status', 'STADIUM IS ADDED TO DATABASE');
  


    }
//-------------------------------PLAYERS-------------------
     public function admin_player(){
        return view('admin_player');
    }
    public function add_player(Request $request){
        
        /*-----ELOQUENT ORM-------*/
        /*see here we don't have to use the table name ELOQUENT understands auto deu to its table prular and model singular  paradigm
        $stadium=new Stadium(array(
            'stadium_name'=>$request->get('stadium_name'),
            'opened'=>$request->get('opened'),
            'capacity'=>$request->get('capacity')
        ));

         $stadium->save();

         return redirect('/save_stadium')->with('status', 'STADIUM IS ADDED TO DATABASE');
         */


        //to use this part have to use ---  use Illuminate\Support\Facades\Redirect; and use DB;
        $file=$request->file('player_img');
        $filename=$request->get('player_country').'-'.$request->get('player_name').'.png';
        if($file){
                Storage::disk('public')->put('img/players/'.$filename , File::get($file));
            }

         $player = new Player(array(
        'player_name' => $request->get('player_name'),
        'player_img_path' => 'img/players/'.$filename,
        'player_country'=> $request->get('player_country'),
        'player_position'=> $request->get('player_position'),
        'jersy_no'=> $request->get('jersy_no'),
        'match_played'=> $request->get('match_played'),
        'goal_scored'=> $request->get('goal_scored'),
        'yellow_cards'=> $request->get('yellow_cards'),
        'red_cards'=> $request->get('red_cards')
        ));

        $player->save();

        Session::put('message','Player Added Successfully!!');
        return Redirect::to('/admin_player');//->with('status', 'STADIUM IS ADDED TO DATABASE');
           
        
    }

    public function admin_player_display(){
        //stadium read from database

        $player=Player::all();

        
        $manage_player=view('admin_player_show')->with('player_info',$player);//here stadium info is a key name

        return view('adminLayout')->with('admin_player_show',$manage_player);//returning main adminLayout pg with  admin_stadium_show page and 
        //$mange_stadium variable  
    }

    public function edit_player($id){
       $player_info=DB::table('players')
            ->where('id',$id)
            ->first();

        $manage_player=view('admin_player_edit')->with('stadium_info',$player_info);//here stadium info is a key name

        return view('adminLayout')->with('admin_player_edit',$manage_player);
    }

    public function delete_player($id){
        DB::table('players')
            ->where('id',$id)
            ->delete();
        Session::put('message','Deleted Successfully!!!');
        return Redirect::to('/admin_player_display');       


    }

    public function update_player(Request $request , $id){
        //echo"$id";

        $file=$request->file('player_img');
        $filename=$request->get('player_country').'-'.$request->get('player_name').'.png';
        if($file){
                Storage::disk('public')->put('img/players/'.$filename , File::get($file));
            }

        
        $data=array();
            $data['player_name']=$request->player_name;
            $data['player_img_path']='img/players/'.$filename;
            $data['player_country']=$request->player_country;
            $data['player_position']=$request->player_position;
            $data['jersy_no']=$request->jersy_no;
            $data['match_played']=$request->match_played;
            $data['player_position']=$request->player_position;
            $data['goal_scored']=$request->goal_scored;
            $data['yellow_cards']=$request->yellow_cards;
            $data['red_cards']=$request->red_cards;
            
            
            DB::table('players')
            ->where('id',$id)
            ->update($data);


        $team-> save();


        //---------
        
            //print_r($data);
            Session::put('message','Player Updated Successfully!!');
            return Redirect::to('/admin_player_display');//->with('status', 'STADIUM IS ADDED TO DATABASE');
  


    }

    //------------------------------MATCH---------------------

 public function admin_match(){
        return view('admin_match');
    }
    public function add_match(Request $request){
        
        /*-----ELOQUENT ORM-------*/
        /*see here we don't have to use the table name ELOQUENT understands auto deu to its table prular and model singular  paradigm
        $stadium=new Stadium(array(
            'stadium_name'=>$request->get('stadium_name'),
            'opened'=>$request->get('opened'),
            'capacity'=>$request->get('capacity')
        ));

         $stadium->save();

         return redirect('/save_stadium')->with('status', 'STADIUM IS ADDED TO DATABASE');
         */

    

        //to use this part have to use ---  use Illuminate\Support\Facades\Redirect; and use DB;
        $file1=$request->file('team1_img');
        $file2=$request->file('team2_img');
        $filename1=$request->get('team1').'-match_no'.$request->get('match_no').'.png';
        $filename2=$request->get('team2').'-match_no'.$request->get('match_no').'.png';
        if($file1){
                Storage::disk('public')->put('img/matchs/'.$filename1 , File::get($file1));
            }
        if($file2){
                Storage::disk('public')->put('img/matchs/'.$filename2 , File::get($file2));
            }

         $match = new Match(array(
        'match_no' => $request->get('match_no'),
        'team1' => $request->get('team1'),
        'team1_img_path'=> 'img/matchs/'.$filename1,
        'team1_score'=> $request->get('team1_score'),
        'team2'=> $request->get('team2'),
        'team2_img_path'=> 'img/matchs/'.$filename2,
        'team2_score'=> $request->get('team2_score'),
        'tie_breaker_desc'=> $request->get('tie_breaker_desc'),
        'played_on'=> $request->get('played_on')
        ));

        $match->save();

        Session::put('message','Player Added Successfully!!');
        return Redirect::to('/admin_match');//->with('status', 'STADIUM IS ADDED TO DATABASE');
           
        
    }

    public function admin_match_display(){
        //stadium read from database

        $match=Match::all();

        
        $manage_match=view('admin_match_show')->with('match_info',$match);//here stadium info is a key name

        return view('adminLayout')->with('admin_match_show',$manage_match);//returning main adminLayout pg with  admin_stadium_show page and 
        //$mange_stadium variable  
    }

     public function delete_match($id){
        DB::table('matches')
            ->where('id',$id)
            ->delete();
        Session::put('message','Deleted Successfully!!!');
        return Redirect::to('/admin_match_display');       


    }
   
   public function edit_match($id){
       $match_info=DB::table('matches')
            ->where('id',$id)
            ->first();

        $manage_match=view('admin_match_edit')->with('match_info',$match_info);//here stadium info is a key name

        return view('adminLayout')->with('admin_match_edit',$manage_match);
    }


     public function update_match(Request $request , $id){
        //echo"$id";
        $data=array();
            $data['match_no']=$request->match_no;
            $data['team1']=$request->team1;
            $data['team1_score']=$request->team1_score;
            $data['team2']=$request->team2;
            $data['team2_score']=$request->team2_score;
            $data['tie_breaker_desc']=$request->tie_breaker_desc;
             $data['played_on']=$request->team2_score;
            /*$file=$request->file('team1_img');
            
            $filename=$request->team1.'-match_no'.$request->match_no.'.png';
            
            $data['stadium_img_path']='img/matchs/'.$filename;

            if($file){
                Storage::disk('public')->put('img/stadiums/'.$filename , File::get($file));
            }*/

            DB::table('matches')
            ->where('id',$id)
            ->update($data);

            //echo "<pre/>";

            //print_r($data);
            Session::put('message','Match Updated Successfully!!');
            return Redirect::to('/admin_match_display');//->with('status', 'STADIUM IS ADDED TO DATABASE');
  


    }

}//end of admin controller
