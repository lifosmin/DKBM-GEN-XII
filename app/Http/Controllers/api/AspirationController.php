<?php

namespace App\Http\Controllers\api;

use App\Mail\ResiMail;
use App\Models\Aspiration;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class AspirationController extends Controller {
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
    
  public function index() {
    //
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create() {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request) {
    $ValidRequest = $request->validate([
      'Resi' => 'required',
      'User_id' => 'required',
      'Kategori' => 'required',
      'Isi' => 'required'
    ]);

    $ValidRequest['Status'] = "Pending";

    Aspiration::create($ValidRequest);

    $user = Aspiration::where('Resi', $ValidRequest['Resi'])->first();

    $dataUser['nama'] = $user->user_send->Nama;
    $dataUser['Email'] = $user->user_send->Email;

    $details = [
      'title' => 'New Aspiration Added with ID : ' . $ValidRequest["Resi"],
      'name' => $dataUser['nama'],
      'isi' => $ValidRequest["Isi"],
      'resi' => $ValidRequest["Resi"]
    ];

    Mail::to($dataUser['Email'])->send(new ResiMail($details));

    return response()->json([
      "message" => "Email has been successfully sent to your account"
    ], Response::HTTP_CREATED);
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id) {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id) {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id) {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id) {
    //
  }
}
