@extends('master')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header bg-primary">
                        <h3 class="card-title">Edit Pertanyaan</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fas fa-times"></i></button>
                        </div>
                    </div>

                    <div class="card-body bg-gray">
            
                    
<!-- ---------------------------------------------------------------------------------------- -->
                       
                        <form role="form" action="/pertanyaan/{{ $edittanya->id }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="judul">Judul</label>
                                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul" value="{{ old('judul', $edittanya->judul) }}">
                                    @error('judul')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="isi">Isi</label>
                                    <input type="text" class="form-control" id="isi" name="isi" placeholder="Isi" value="{{ old('isi', $edittanya->isi) }}">
                                    @error('isi')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>  
                            </div>
                            
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Edit Pertanyaan</button>
                            </div>
                        </form>

<!-- ---------------------------------------------------------------------------------------- -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection