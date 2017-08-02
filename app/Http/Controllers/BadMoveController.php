<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\BadMove;

class BadMoveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            // return ['apple' => 'red', 'peach' => 'pink'];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kif_id = $request->input('kif_id');
        $move_num = $request->input('move_num');
        $best_score = $request->input('best_score');
        $actual_score = $request->input('actual_score');
        $diff_score = $request->input('diff_score');
        $sfen = $request->input('sfen');
        $flipped_sfen = $request->input('flipped_sfen');
        $actual_move = $request->input('actual_move');
        $pv = $request->input('pv');

        if ($kif_id === null
            || $move_num === null
            || $best_score === null
            || $actual_score === null
            || $diff_score === null
            || $sfen === null
            || $flipped_sfen === null
            || $actual_move === null
            || $pv === null){
            return ['code' => '400', 'status' => 'failed', 'request' => $request];
        }

        $bad_move = new \App\BadMove();
        $bad_move->kif_id = $kif_id;
        $bad_move->move_num = $move_num;
        $bad_move->best_score = $best_score;
        $bad_move->actual_score = $actual_score;
        $bad_move->diff_score = $diff_score;
        $bad_move->sfen = $sfen;
        $bad_move->flipped_sfen = $flipped_sfen;
        $bad_move->actual_move = $actual_move;
        $bad_move->pv = $pv;
        $bad_move->save();

        return ['code' => '200', 'status' => 'success'];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return [\App\BadMove::find($id)];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
