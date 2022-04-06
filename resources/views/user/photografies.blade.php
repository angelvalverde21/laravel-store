@extends('layouts.user')

@section('content')

<x-user.header />

<x-user.sidebar />

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Mis fotos</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('user')}}">Home</a></li>
              <li class="breadcrumb-item active">Mis fotos</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
 
        @livewire('user.photografies.show-photos', ['title' => 'Este es un titulo de prueba'])

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



<x-user.footer />

@endsection

