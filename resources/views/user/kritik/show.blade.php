@extends('layouts.main')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-12">
                    <div class="card">
                        <form action="/user/kritik/update/{{ $kritik->id }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-header">
                                <h4>Kritik dan Saran</h4>
                            </div>
                            @if (session('success'))
                            <div class="alert alert-warning" role="alert">
                               {{ session('success') }}
                            </div>
                            @endif
                            <div class="card-body">
                                <div class="form-group">
                                    <textarea class="form-control" name="kritik">{{ $kritik->kritik }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                                <button type="button" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete-form').submit();">Hapus</button>
                            </div>
                        </form>
                        <form id="delete-form" action="/user/kritik/delete/{{ $kritik->id }}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </div>
                </div>
                @isset($kritik->komentar)
                <div class="col-12 col-md-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Balasan untuk kritik dan saran anda</h4>
                        </div>
                        <div class="card-body">
                            {{ $kritik->komentar }}
                        </div>
                    </div>
                </div>
                @endisset
            </div>
        </div>
    </section>
</div>
@endsection
