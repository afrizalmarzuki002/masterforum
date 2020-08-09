@extends('master')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header bg-primary">
                        <h3 class="card-title">Detail Pertanyaan</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fas fa-times"></i></button>
                        </div>
                    </div>

                    <div class="card-body bg-gray">
            
                    
<!-- ---------------------------------------------------------------------------------------- -->
                        <div class="row">
                            <div class="col-md-3"></div>

                            <div class="col-md-6">
                                <h4> {{ $detailtanya->judul }} </h4>
                                <p> {{ $detailtanya->isi }} </p>
                                <p> {{ $detailtanya->tanggal_dibuat }} </p>
                                <p> {{ $detailtanya->tanggal_diperbarui }} </p>
                                <a href="/pertanyaan" action class="btn btn-warning">Back</a>
                            </div>

                            <div class="col-md-3"></div>
                        </div

<!-- ---------------------------------------------------------------------------------------- -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection