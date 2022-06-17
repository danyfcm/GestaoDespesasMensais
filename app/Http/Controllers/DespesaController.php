<?php

namespace App\Http\Controllers;

use App\Models\Despesa;
use App\Models\User;
use Illuminate\Http\Request;

class DespesaController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        //
        $posts = Despesa::where('userId', $user->id) -> orderby('data', 'desc') -> get();


        //return $posts;
        return view('despesa.index', ['posts' => $posts], ['user' => $user]);

    }

     public function create(User $user)
    {
        //
        return view('despesa.create', ['userId' => $user->id]);
    }

        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(User $user, Request $request)
    {
        //
        $newPost = Despesa::create([ 'nome' => $request -> nome, 'quantidade' => $request -> quantidade, 'data' => $request -> data, 'userId' => $request -> userId ]);

        return redirect($user->id.'/despesa/'.$newPost -> id);

    }

        /**
     * Display the specified resource.
     *
     * @param  \App\Models\Despesa  $despesa
     * @return \Illuminate\Http\Response
     */
    public function show(User $user, Despesa $despesa)
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
    public function edit(User $user, Despesa $despesa)
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
    public function update(User $user, Request $request, Despesa $despesa)
    {
        //
        $despesa -> update( [ 'nome' => $request -> nome, 'quantidade' => $request -> quantidade, 'data' => $request -> data ] );

        return redirect( $user->id.'/despesa/'.$despesa -> id );

    }

        /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Despesa  $despesa
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, Despesa $despesa)
    {
        //
        $despesa -> delete();

        return redirect( $user->id.'/despesa/');

    }
}
