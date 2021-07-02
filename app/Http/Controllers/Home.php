<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Country;
use Config;
use Validator;
use Auth;
use Mail;
use DB;
use Route;
use DataTables;

class Home extends Controller {

    public function __construct() {
    }

    public function index(Request $request)
    {
        $countries=Country::pluck('name')->ToArray();
        if ($request->ajax()) {
            $data = Customer::query();

            if ($request->get('country')) {
                $code=Country::where('name',$request->get('country'))->select('phonecode')->first()->phonecode;
               $data=Customer::where('phone','LIKE','%'.$code.'%');
            }
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('state', function($user) {
                    if($this->phoneNumbervalidation($user->phone)) {
                        return '<span class="badge badge-primary">OK</span>';
                    }else {
                        return '<span class="badge badge-danger">NOK</span>';
                    }
                })
                ->addColumn('country_name', function($user) {
                    list($area_code,$ph_num) = str_replace('(','',explode(') ',$user->phone));
                    return Country::where('phonecode',$area_code)->select('name')->first()->name;
                })
                ->addColumn('code', function($user) {
                    list($area_code,$ph_num) = str_replace('(','',explode(') ',$user->phone));
                    return '+'.$area_code;
                })->addColumn('phone', function($user) {
                    list($area_code,$ph_num) = str_replace('(','',explode(') ',$user->phone));
                    return $ph_num;
                })
                ->filter(function ($instance) use ($request) {
                    if ($request->get('state') == 'OK' || $request->get('state') == 'NOK') {
                        foreach(Customer::get() as $col){
                            if($this->phoneNumbervalidation($col->phone)) {
                                $all_numbers_valid[] = $col->phone;
                            }else{
                                $all_numbers_invalid[] = $col->phone;
                            }
                        }
                        $instance->whereIn('phone', ($request->get('state') == 'OK')?$all_numbers_valid:$all_numbers_invalid);
                    }
                    if (!empty($request->get('search'))) {
                        $instance->where(function($w) use($request){
                            $search = $request->get('search');
                            $w->orWhere('name', 'LIKE', "%$search%")
                                ->orWhere('phone', 'LIKE', "%$search%");
                        });
                    }
                })->rawColumns(['state'])
                ->make(true);
        }

        return view('front.pages.users',compact('countries'));
    }

    public function phoneNumbervalidation($mobile)
    {
        if(preg_match('/\(237\)\ ?[2368]\d{7,8}$|\(251\)\ ?[1-59]\d{8}$|\(212\)\ ?[5-9]\d{8}$|\(258\)\ ?[28]\d{7,8}$|\(256\)\ ?\d{9}$/m', $mobile,$matches)){

            return true;
        }
        else
            return false;
    }

}