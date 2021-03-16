@extends('layouts.master')
@section('title', 'Detail Jabatan')
@section('content')

<div class="right_col">
    <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <h2> Jabatan Ini Adalah  {{ $position->jabatan }}</h2>
          <div class="x_title">
          </div>
            @include('partials._keterangan')
            <hr>
            <form action="/positions/{{ $position->jabatan }}/delete" method="post">
              @csrf
              @method('delete')
              <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
        </div>

      </div>
    </div>
</div>

@endsection