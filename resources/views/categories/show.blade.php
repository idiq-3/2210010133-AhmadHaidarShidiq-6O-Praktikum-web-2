@extends('theme.default')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Detail Kategori</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">Kategori</a></li>
        <li class="breadcrumb-item active">Detail</li>
    </ol>
    <div class="card mb-4">
        <div class="card-body">
            <table class="table table-bordered">
                <tr><th>ID</th><td>{{ $category->id }}</td></tr>
                <tr><th>Nama</th><td>{{ $category->name }}</td></tr>
                <tr><th>Dibuat</th><td>{{ $category->created_at->format('d-m-Y H:i') }}</td></tr>
                <tr><th>Diperbarui</th><td>{{ $category->updated_at->format('d-m-Y H:i') }}</td></tr>
            </table>
            <a href="{{ route('categories.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@endsection
