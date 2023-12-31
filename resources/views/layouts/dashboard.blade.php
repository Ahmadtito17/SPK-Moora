@extends('layouts.index')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div>
                <div class="col-sm-6"></div>
            </div>
        </div>
    </div>
    
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Selamat Datang</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body bg-secondary">
                    <div class="row">
                        <a href="https://id.wikipedia.org/wiki/Sistem_pendukung_keputusan" class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Tentang Moora</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </a>
                        <!-- /.col -->

                        <!-- fix for small devices only -->
                        <div class="clearfix hidden-md-up"></div>

                        <a href="https://e-journals.unmul.ac.id/index.php/JIM/article/view/5993"
                            class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-book"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Metode Moora</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </a>
                        <!-- /.col -->
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.row -->
        </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection

@push('custom_js')
    @if ($message = Session::get('success'))
        <script>
            toastr.success('{{ $message }}')
        </script>
    @endif
    @if ($message = Session::get('error'))
        <script>
            toastr.error('{{ $message }}')
        </script>
    @endif
@endpush