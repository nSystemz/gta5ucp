@extends('layouts.master')
@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Fahrzeuge</h1>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      @foreach ($vehicles as $data )
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Fahrzeug: {{$data->vehicleName}}</h3>
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
          Tank: {{$data->fuel}}l
          <br>
          Position: {{$data->posX}}, {{$data->posY}}, {{$data->posZ}}, {{$data->posA}}
        </div>
      </div>
      @endforeach
    </section>
@endsection
