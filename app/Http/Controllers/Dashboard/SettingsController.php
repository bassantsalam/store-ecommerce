<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Http\Requests\ShippingsRequest;
USE Illuminate\Support\Facades\DB;
use Yajra\DataTables\Utilities\Request as UtilitiesRequest;

class SettingsController extends Controller
{
    function editShippingMethods($type)
    {
        if ($type === 'free'){

             $shipping = Setting::where('key', 'free_shipping_label') -> first();
        
        }

        elseif ($type === 'inner'){

             $shipping = Setting::where('key', 'local_label') -> first();
        
        }

        elseif ($type === 'outer'){

          $shipping = Setting::where('key', 'outer_label') -> first();
        }
        else{
            return 'have error or nor found';
        }
        return view('dashboard.settings.shippings.edit', compact('shipping'));
    }

    public function updateShippingMethods(ShippingsRequest $request , $id)
    {
        //validatins

        try
        {
        $shippinf_methods = Setting::find($id);
        //34AN L FE AKER MN ACTION FE FUN W WA7ED FEHOM FE 8ALT MAYNFZ 
      //  DB::transaction();
            
      
        $shippinf_methods -> update(['plain_value' => $request -> plain_value]);
        $shippinf_methods -> value = $request -> value;
        $shippinf_methods -> save();

        //
        DB::commit();
        return redirect() -> back() ->with(['success' => 'update syccessfuly']);
        }catch (\Exception $ex){
          
            return redirect() -> back() ->with(['error' => 'update ERROR']);
            DB::rollback();
        }

    }
}
