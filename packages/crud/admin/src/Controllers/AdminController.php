<?php
namespace Crud\Admin\Controllers;

use Illuminate\Http\Request;
use Crud\Admin\Models\Admin;
use Illuminate\Support\Facades\Log;

class AdminController
{

    public function adminList() {
        $admins = Admin::all();
        return view("admin::list",compact('admins'));
        
    }

  public function create(){
        return view('admin::create');
  }

  public function store(Request $request){
      $admin = new Admin;
      $admin->name = $request->name;
      $admin->email = $request->email;
      $admin->mobile = $request->mobile;
      $admin->password = $request->password;
      $admin->save();
      return redirect('/list');

  }

  public function edit(){

  }

  public function update(){

  }

}
