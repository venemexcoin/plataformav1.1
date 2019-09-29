<?php

namespace App\Http\Controllers;

use App\Admin;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Http\Request;



class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:admin.create')->only(['create', 'store']);

        $this->middleware('permission:admin.index')->only('index');

        $this->middleware('permission:admin.edit')->only(['edit', 'update']);

        $this->middleware('permission:admin.show')->only('show');

        $this->middleware('permission:admin.destroy')->only('destroy');


    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('/admin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        return view('admins.show', compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        $roles = Role::get();
        return view('admins.edit', compact('admin','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        // Actualiza el usuario
        $admin->update($request->all());

        // Actualizar Roles
        $admin->roles()->sync($request->get('roles'));

        return redirect()->route('admins.edit', $admin->id)
        ->with('info', 'Admino actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
      $admin->delete();

      return back()->with('info', 'Eliminado correctamente');
    }
}
