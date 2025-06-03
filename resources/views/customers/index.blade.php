@extends('theme.default')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Data Customer</h1>
    <a href="{{ route('customers.create') }}" class="btn btn-success mb-3">ADD CUSTOMER</a>

    <table class="table table-bordered">
        <thead>
            <tr><th>ID</th><th>NIK</th><th>Nama</th><th>Telp</th><th>Aksi</th></tr>
        </thead>
        <tbody>
            @forelse ($customers as $customer)
                <tr>
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->nik }}</td>
                    <td>{{ $customer->nama }}</td>
                    <td>{{ $customer->telp }}</td>
                    <td>
                        <a href="{{ route('customers.show', $customer->id) }}" class="btn btn-dark btn-sm">Lihat</a>
                        <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus data?')">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="5" class="text-center">Data tidak ditemukan</td></tr>
            @endforelse
        </tbody>
    </table>

    {{ $customers->links() }}
</div>
@endsection
