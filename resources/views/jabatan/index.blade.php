@extends('layouts.master')
@section('title', 'Data Jabatan')
@section('content')
      <div class="right_col">
        <div class="row">
          <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
              <div class="x_title">
                <h2> Data Seluruh Jabatan </h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a href="/positions/create" class="btn btn-success"><i class="fas fa-plus"></i>Tambah</a></li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                  <div class="row">
                      <div class="col-sm-12">
                        <div class="card-box table-responsive">
                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                    <tr>
                      <th>ID Jabatan</th>
                      <th>Nama Jabatan</th>
                      <th>Dibuat</th>
                      <th>Action</th>
                  </thead>
                  <tbody>
                    @foreach ($position as $jab)
                    <tr>
                      <td> {{ $jab->id }}</td>
                      <td> {{ $jab->jabatan }} </td>
                      <td> {{ $jab->created_at }} </td>
                      <td>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                              <div>
                                <a href="/positions/{{ $jab->jabatan }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                              </div>
                            </li>
                            <li class="list-inline-item">
                              <a href="/positions/{{ $jab->jabatan }}/edit" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                            </li>
                        </ul>
                      </td>
                    </tr>
                    @endforeach 
                  </tbody>
                </table>
                {{ $position->links() }}
              </div>
              </div>
          </div>
        </div>
      </div>
@endsection