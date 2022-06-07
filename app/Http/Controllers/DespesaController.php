<?php

namespace App\Http\Controllers;

use App\Models\Despesa;
use Illuminate\Http\Request;

class DespesaController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Despesa::all();

        //return $posts;
        return view('despesa.index', ['posts' => $posts]);

    }

     public function create()
    {
        //
        return view('despesa.create');
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
        $newPost = Despesa::create([ 'nome' => $request -> nome, 'quantidade' => $request -> quantidade, 'data' => $request -> data ]);

        return redirect('despesa/'.$newPost -> id);

    }

        /**
     * Display the specified resource.
     *
     * @param  \App\Models\Despesa  $despesa
     * @return \Illuminate\Http\Response
     */
    public function show(Despesa $despesa)
    {
        //
        //return $blogPost;

        return view( 'despesa.show', ['post' => $despesa] );
    }

        /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Despesa  $despesa
     * @return \Illuminate\Http\Response
     */
    public function edit(Despesa $despesa)
    {
        //

        return view( 'despesa.edit', ['post' => $despesa] );
    }

        /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Despesa  $despesa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Despesa $despesa)
    {
        //
        $despesa -> update( [ 'nome' => $request -> nome, 'quantidade' => $request -> quantidade, 'data' => $request -> data ] );

        return redirect( 'despesa/'.$despesa -> id );

    }

        /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Despesa  $despesa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Despesa $despesa)
    {
        //
        $despesa -> delete();

        return redirect( '/despesa' );

    }
}
