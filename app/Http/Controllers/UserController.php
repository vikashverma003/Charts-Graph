<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\UserPerformance;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
		public function index(){
			$isUser=1;
			if(isset($_GET['userPerformance'])){
            $isUser=$_GET['userPerformance'];
             }
            $user_performance=$this->user_performance_chart($isUser);
			return view('chart',['user_performance'=>$user_performance]);
		}


    public function user_performance_chart($i=null){

        $user_id=auth()->user()->id;
     if($i>1&&$i<=2)
        {
            $current_month=date('m');
        $t=UserPerformance::where('user_id',$user_id)->whereRaw('MONTH(created_at) = '.$current_month)->select(DB::raw('MONTH(created_at) as month'),DB::raw('sum(performance) as `data`') )->groupBy(DB::raw('MONTH(created_at)'))->get();

        }
        elseif($i>2&&$i<=3){
            $current_year=date('yy');
            $t=UserPerformance::where('user_id',$user_id)->whereRaw('YEAR(created_at) = '.$current_year)->select(DB::raw('MONTH(created_at) as month'),DB::raw('sum(performance) as `data`') )->groupBy(DB::raw('MONTH(created_at)'))->get();
        }
        elseif($i>3&&$i<=4){

        	$previous_month=\Carbon\Carbon::now()->subMonth()->month;
            $t=UserPerformance::where('user_id',$user_id)->whereRaw('MONTH(created_at) = '.$previous_month)->select(DB::raw('MONTH(created_at) as month'),DB::raw('sum(performance) as `data`') )->groupBy(DB::raw('MONTH(created_at)'))->get();

        }
        else{
            $t=UserPerformance::where('user_id',$user_id)->select(DB::raw('MONTH(created_at) as month'),DB::raw('sum(performance) as `data`') )->groupBy(DB::raw('MONTH(created_at)'))->get();
        }
       // die();
        // $t=Transaction::select(DB::raw('MONTH(created_at) as month'),DB::raw('count(id) as `data`') )->groupBy(DB::raw('MONTH(created_at)'))->get();
        $j=[];
        foreach($t as $tt=>$val){
            $months=$val['month'];
            if($months=='1'){
                $month='Jan';
            }
            if($months=='2'){
                $month='Feb';
            }
            if($months=='3'){
                $month='March';
            }
            if($months=='4'){
                $month='April';
            }
            if($months=='5'){
                $month='May';
            }
            if($months=='6'){
                $month='June';
            }
            if($months=='7'){
                $month='July';
            }
            if($months=='8'){
                $month='August';
            }
            if($months=='9'){
                $month='Sep';
            }
            if($months=='10'){
                $month='Oct';
            }
            if($months=='11'){
                $month='Nov';
            }
            if($months=='12'){
                $month='Dec';
            }
            $data=$val['data'];
            $j[]=['month'=>$month,'data'=>$data];
        }
        return json_encode($j);
    }

	    

}
