@extends('layouts.master')
@section('title', 'Data Jabatan')
@section('content')

        <div class="right_col">
          <div class="page-title">
            <div class="title_left">
              <h3> Tambah Data Jabatan</h3>
            </div>
            {{-- <div class="title_right">
              <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Go!</button>
                  </span>
                </div>
              </div>
            </div> --}}
          </div>
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="x_panel">
                <div class="x_title">
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="/positions/store" method="post">
                      @csrf
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama Jabatan <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="jabatan" name="jabatan" id="jabatan" required="required" class="form-control ">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name"><span class="required"></span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
        </div>
@endsection