@extends('layout.admin')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit alternatif</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit alternatif</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Edit Data peserta</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="/alternatif/update/{{$alternatif ->id}}" class="form-horizontal">
                @csrf
                @method('put')
                <div class="card-body">
                  <div class="form-group row">
                    <label for="merek" class="col-sm-2 col-form-label">merek</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="merek" placeholder="" value="{{ $alternatif->merek}}" required="required">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">nama</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" value="{{ $alternatif->nama}}" required="required">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="harga" class="col-sm-2 col-form-label">harga</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="harga" value="{{ $alternatif->harga}}" required="required">
                    </div>
                  </div>
                    <div class="form-group row">
                      <label for="ram" class="col-sm-2 col-form-label">ram</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="ram" value="{{ $alternatif->ram}}" required="required">
                      </div>
                    </div>
                      <div class="form-group row">
                        <label for="harga" class="col-sm-2 col-form-label">memory</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="memory" value="{{ $alternatif->memory}}" required="required">
                        </div>
                      </div>
                        <div class="form-group row">
                          <label for="performasoc" class="col-sm-2 col-form-label">performasoc</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="performasoc" value="{{ $alternatif->performasoc}}" required="required">
                          </div>
                        </div>
                          <div class="form-group row">
                            <label for="kamera" class="col-sm-2 col-form-label">kamera</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="kamera" value="{{ $alternatif->kamera}}" required="required">
                            </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success float-right">Simpan</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  @endsection