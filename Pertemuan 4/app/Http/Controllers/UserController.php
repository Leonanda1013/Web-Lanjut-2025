<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // $data = [
        //     'username' => 'customer-1',
        //     'nama' => 'Pelanggan',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 3

        // ];
        // UserModel::insert($data);

        // $data = [
        //     'nama' => 'Pelanggan Pertama',
        // ];
        // UserModel::where('username', 'customer-1')->update($data);

        // $user = UserModel::all();
        // return view('user', ['data' => $user]);

        //         $data = [
        //     'username' => 'manager_tiga',
        //     'nama' => 'Manager 3',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 2

        // ];
        // UserModel::create($data);

        // $user = UserModel::all();
        // return view('user', ['data' => $user]);

        //praktikum2.1
        // $user = UserModel::find(1);
        // return view('user', ['data' => $user]);

        // $user = UserModel::where('level_id', 1)->first();
        // return view('user', ['data' => $user]);

        // $user = UserModel::firstWhere('level_id',1);
        // return view('user', ['data' => $user]);

        // $user = UserModel::findOr(20 , ['username', 'nama'],function(){
        //     abort(404);
        // });
        // return view('user' , ['data' => $user]);

        //praktikum2.2
        // $user = UserModel::findOrFail(1);
        // return view('user', ['data'=>$user]);

        // $user = UserModel::where('username', 'manager9')->firstOrFail();
        // return view('user', ['data' => $user]);

        // $user = UserModel::where('level_id',2)->count();
        // dd($user);
        // return view('user', ['data' => $user]);

        // // praktikum2.4 !masih eror pak
        // $user = UserModel::firstOrCreate(
        //     [
        //         'username' => 'manager',
        //         'nama' => 'Manager',
        //     ],
        // );

        // return view('user',['data' => $user]);

        
        // $user = UserModel::firstOrNew(
        //     [
        //         'username' => 'manager',
        //         'nama' => 'Manager TIga Tiga',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2
           
        //     ], !ini salah yok harusnya ]),
        // );
        // $user->save();
        // return view('user',['data' => $user]); !masih eror pak

///////////////////////////////////////////////////////////////////////////////////////////
        //praktikum 2.5
        // $user = UserModel::create([
        //     'username' => 'manager55',
        //     'nama' => 'Manager55',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 2,
        // ]);

        // $user->username = 'manager56';

        // $user->isDirty();
        // $user->isDirty('username');
        // $user->isDirty('nama');
        // $user->isDirty(['nama', 'username']);

        // $user->isClean();
        // $user->isClean('usernmae');
        // $user->isClean('nama');
        // $user->isClean(['nama','username']);

        // $user->save();

        // $user->isDirty();
        // $user->isClean();
        // dd($user->isDirty());

////////////////////////////////////////////////////////////////////////////////////////////////////

// $user = UserModel::create([
//     'username' => 'manager11',
//     'nama' => 'Manager11',
//     'password' => Hash::make('12345'),
//     'level_id' => 2,
// ]);

// $user->username = 'manager12';

// $user->save();

// $user->wasChanged();
// $user->wasChanged('username');
// $user->wasChanged(['username','level_id']);
// $user->wasChanged('nama');
// dd($user->wasChanged(['nama','username']));

/////////////////////////////////////////////////////////////////////////////////

        $user =UserModel::all();
        return view('user',['data' => $user]);}

        public function tambah(){
            return view('user_tambah');//masih belom bisa halam 17 no.7
        
    }

    public function tambah_simpan(Request $request){
        UserModel::create([
            'username' => $request->usernmae,
            'nama' => $request->nama,
            'password' => Hash::make('$request->password'),
            'level_id' => $request->level_id
        ]);

        return redirect('/user');
    }
    public function ubah($id){
        $user = UserModel::find($id);
        return view('user_ubah',['data' => $user]);
    }

    public function ubah_simpan($id, Request $request){
        $user = UserModel::find($id);

        $user->username = $request->username;
        $user->nama = $request->nama;
        $user->password = Hash::make('$request->password');
        $user->level_id = $request->level_id;

        $user->save();

        return redirect('/user');
    }

    public function hapus($id){
        $user = UserModel::find($id);
        $user->delete();

        return redirect('/user');
    }

    // public function index(){
    //     $user = UserModel::with('level')->get();
    //     dd($user);
    // }

//     public function index(){
//         $user = UserModel::with('level')->get();
//         return view('user', ['data' =>$user]);
//     }
}