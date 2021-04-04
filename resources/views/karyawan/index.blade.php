@extends('layouts.master')
@section('title', 'Data Karyawan')
@section('content')
      <div class="right_col">
        <div class="row">
          <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
              <div class="x_title">
                <h2> Data Seluruh Karyawan </h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a href="/positions/create" class="btn btn-success"><i class="fas fa-plus"> Add New</i></a></li>
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
                      <th>Nama Karyawan</th>
                      <th>Alamat</th>
                      <th>No Hp</th>
                      <th>Gambar</th>
                      <th>Action</th>
                  </thead>
                  <tbody>
                    @foreach ($workers as $worker)
                    <tr>
                      <td> {{ $worker->nama }} </td>
                      <td> {{ $worker->alamat }} </td>
                      <td> {{ $worker->no_hp }} </td>
                      <td> {{ $worker->gambar }} </td>
                      <td> {{ $worker->created_at }} </td>
                      <td>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                              <div>
                                <a href=#" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                              </div>
                            </li>
                            <li class="list-inline-item">
                              <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                            </li>
                        </ul>
                      </td>
                    </tr>
                    @endforeach 
                  </tbody>
                </table>
                {{ $workers->links() }}
              </div>
              </div>
          </div>
        </div>
      </div>
@endsection