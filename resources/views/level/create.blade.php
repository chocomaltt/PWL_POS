@extends('layouts.app') 
 
@section('subtitle', 'Level')
@section('content_header_title', 'Level')
@section('content_header_subtitle', 'Tambah')
 
{{-- @section('content_header') 
    <h1>Form Tambah User</h1> 
@stop  --}}
 
@section('content') 
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Form Tambah Level</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Level ID</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Username">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Level Kode</label>
          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Nama">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Level Nama</label>
          <input type="Number" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Level ID">
        </div>
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
@endsection
