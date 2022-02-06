@extends('layouts.master')
@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Accountsstats von {{Auth::user()->name}}</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          Geld: {{Auth::user()->geld}}$
          <br>
          Adminlevel: {{Auth::user()->adminlevel}}
          <br>
          Fraktion/Rang: {{Auth::user()->fraktion}} - {{Auth::user()->rang}}
          <br>
        </div>
      </div>
    </section>
@endsection
