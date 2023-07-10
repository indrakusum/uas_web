@extends('layout.admin')

@section('content')>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data peserta</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data handphone</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data handphone</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="/kriteria/tambah" class="btn-sm btn-success">Tambah kriteria +</a>
                <br/><br/>
                <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kreteria</th>
                                        <th>Bobot</th>
                                        <th>Label</th>
                                        <th>Aksi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kriteria as  $hasil)

                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $hasil->nama }}</td>
                                        <td>{{ $hasil->bobot }}</td>
                                        <td>{{ $hasil->label }}</td>
                                        <td>
                                            <form >
                                            <a href="/kriteria/edit/{{$hasil->id}}" class="btn-xs btn-primary">Edit</a>
                                            <a href="/kriteria/delete/{{$hasil->id}}" class="btn-xs btn-danger">Delete</a>
                                            </form>
                                          </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                          </div>
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                      </div>
                      <!-- /.col -->
                    </div>
                    <!-- /.row -->
                  </div>
                  <!-- /.container-fluid -->
                </section>
                <!-- /.content -->
              </div>
              
@endsection
