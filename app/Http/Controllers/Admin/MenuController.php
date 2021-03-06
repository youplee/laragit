<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Menu;
use Illuminate\Http\Request;
use Session;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::paginate(5);

        return view('admin.menus.index')
                  ->with('menus', $menus);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'lien' => 'required',
        ]);

        $menu = new Menu();
        $menu->name = $request->name;
        $menu->lien = $request->lien;

        $menu->save();

        Session::flash('success', 'This menu is created successfully ');

        return redirect()->route('menu.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Menu $menu
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Menu $menu
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Menu                $menu
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Menu $menu
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
    }
}
