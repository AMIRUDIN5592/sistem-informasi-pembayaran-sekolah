<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use App\Models\User;
use App\Models\Petugas;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use App\DataTables\AdminListDataTable;
class HomeController extends Controller
{
    public function index()
    {
       
    	return view('home');
    }
    function generate(){
      

    	// if ($validator->passes()) {
            // DB::transaction(function() use($request){
                $user = User::create([
                    'username' => Str::lower('amirudin'),
                    'password' => Hash::make('123456'),
                ]);

                $user->assignRole('admin');

                Petugas::create([
                    'user_id' => $user->id,
                    'kode_petugas' => 'PTGR'.Str::upper(Str::random(5)),
                    'nama_petugas' => 'amirudin',
                ]);
            // });

            return response()->json(['message' => 'Data berhasil disimpan!']);
    	// }

        // return response()->json(['error' => $validator->errors()->all()]);
    }
}
