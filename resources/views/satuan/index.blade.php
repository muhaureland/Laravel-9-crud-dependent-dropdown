@extends('template.main')
@section('container')
    <h1>qwe</h1>
    <a class="btn btn-primary mt-4" href="{{ route('satuan.create') }}" role="button">Tambah Data</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Nos</th>
            <th scope="col">Nama</th>
            <th scope="col">Material</th>
            <th scope="col">course</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          {{-- @dd($materials) --}}
          @foreach ($satuans as $item)
          {{-- @dd($item->course->nama) --}}
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->category->nama }}</td>
            <td>{{ $item->course->nama }}</td>
            <td>{{ $item->jumlah }}</td>
            <td>
              <a class="btn btn-primary" href="{{ route('satuan.edit', $item->slug) }}" role="button">edit Data</a>
              <form class="d-inline" action="{{ route('satuan.destroy', $item->slug) }}" method="post">
                  @method('delete')
                  @csrf
                  <button class="text-danger" type="submit">delete</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
@endsection