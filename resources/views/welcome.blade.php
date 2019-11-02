@extends('layouts.main')
@section('content')

<div class="container">

    <h1> Data Mahasiswa </h1>

    @if(session('successMsg'))

    <div class="alert alert-success" role="alert">
        {{ session('successMsg') }}
    </div>

    @endif

    <table class="table table-striped">
        <thead class="blue white-text">
            <tr>
                <th scope="col">No</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <th scope="col">Jurusan</th>
                <th scope="col">No. Telp</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = $mahasiswa->firstItem() - 1;?>
            @foreach($mahasiswa as $mhs)
            <?php $no++; ?>
            <tr>
                <th scope="row">{{ $no }}</th>
                <td>{{ $mhs->nim }}</td>
                <td>{{ $mhs->nama }}</td>
                <td>{{ $mhs->jurusan }}</td>
                <td>{{ $mhs->telepon }}</td>
                <td>
                    <a href="{{ route('edit', $mhs->id) }}" class="btn btn-raised btn-primary btn-sm"><i class="far fa-edit"></i></a>
                    || 

                    <form method="post" id="delete-form-{{ $mhs->id }}" action="{{ route('delete',$mhs->id) }}" style="display: none;">

                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                    </form>

                    <button onclick="if(confirm('Anda yakin ingin menghapus?')){
                        event.preventDefault();
                        document.getElementById('delete-form-{{ $mhs->id }}').submit();
                    }else{
                        event.preventDefault()
                    }

                    " class="btn btn-raised btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $mahasiswa->links() }}
</div>
@endsection
