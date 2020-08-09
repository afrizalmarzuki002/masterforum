@extends('master')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header bg-primary">
                        <h3 class="card-title">List Pertanyaan</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fas fa-times"></i></button>
                        </div>
                    </div>

                    <div class="card-body bg-gray">
            
                    
<!-- ---------------------------------------------------------------------------------------- -->
                        @if(session('notifsuccess'))
                        <div class="alert alert-success">
                            {{session('notifsuccess')}}
                        </div>
                        @endif
                        
                        <a href="/pertanyaan/create" type="button" class="btn btn-warning mb-2" style="color:black !important;">
                            Tambah Pertanyaan
                        </a>
                          
                        
                        <table class="table table-bordered">
                            <thead>                  
                                <tr>
                                    <th style="width: 10px">No</th>
                                    <th>Judul</th>
                                    <th>Isi</th>
                                    <th>Tanggal Dibuat</th>
                                    <th>Tanggal Diperbarui</th>
                                    <th style="width: 120px">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($listpertanyaan as $applist)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $applist->judul }}</td>
                                    <td>{{ $applist->isi }}</td>
                                    <td>{{ $applist->tanggal_dibuat }}</td>
                                    <td>{{ $applist->tanggal_diperbarui }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="/pertanyaan/{{ $applist->id }}" type="button" class="btn btn-primary"">
                                                Detail
                                            </a>

                                            <a href="/pertanyaan/{{ $applist->id }}/edit" type="button" class="btn btn-warning"">
                                                Edit
                                            </a>

                                            <form action="/pertanyaan/{{ $applist->id  }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <input type="submit" value="Delete" class="btn btn-danger">
                                            </form>


                                        </div>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>

<!-- ---------------------------------------------------------------------------------------- -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection