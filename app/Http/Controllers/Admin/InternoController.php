<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Interno;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InternoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $listaInterno = Interno::all();
        return view('admin/index', compact('listaInterno'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $Interno = new Interno();
        return view('admin/create', compact('Interno'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $interno = Interno::create($request->all());

       return redirect()->route('admin.index');

    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return void
     */
    public function show($id)
    {
        $interno = Interno::find($id);
        return view('admin.show', compact('interno'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Interno $interno
     * @return Application|Factory|View
     */
    public function edit(Interno $interno)
    {
        $interno = Interno::findOrFail($interno->getKey());
        return view('admin/edit')->with('interno',$interno);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Interno $interno
     * @return RedirectResponse
     */
    public function update(Request $request, Interno $interno)
    {
        $interno = Interno::findOrFail($interno->getKey());
        $data =  $request->all();
        $interno->update($data);
        return redirect()->route('admin.index')->with('success', 'Interno Actualizado Correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Interno $interno
     * @return RedirectResponse
     */
    public function destroy(Interno $interno)
    {
        $inter = Interno::findOrFail($interno->getKey());
        $inter->delete();
        return redirect()->route('admin.index');
    }
}
