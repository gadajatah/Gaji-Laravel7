@extends('layouts.master')
@section('title', 'Detail Jabatan')
@section('content')

<div class="right_col">
    <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <div class="x_title">
            <h2> Jabatan Ini Adalah  {{ $position->jabatan }}</h2>
          </div>
        </div>
    </div>
</div>

@endsection