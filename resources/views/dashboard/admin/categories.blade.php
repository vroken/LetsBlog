@extends('dashboard.layouts.main')

@section('container')
<div class="card-header card-header-primary">
    <h4 class="card-title ">Data Table Category</h4>
    <p class="card-category">You can edit your category at here.</p>
    </div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="/dashboard/categories/create" class="btn btn-primary">Tambahkan Data</a>
                @if(Session::has('message'))
                    <div class="alert alert-success mt-3">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="material-icons">close</i>
                    </button>
                    <span>
                        <b> Success - </b> {{ Session::get('message') }}</span>
                    </div>
                @endif
                <table class="table">
                    <thead class=" text-primary">
                        <th>No.</th>
                        <th>Title</th>
                        <th>Created Date</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->created_at->diffForHumans() }}</td>
                                <span class="bi bi-eye"></span></a>
                                <td>
                                    <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-warning">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="1 0 15 15">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                        </svg>
                                    </a>
                                    <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <a href="#modal-delete" data-toggle="modal" class="badge bg-danger text-white border-0" id="showAlert" onclick="$(#modalDelete $formDelete)">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                                </svg>
                                        </a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>
    <div class="card-footer">
        <div class="stats">
            <i class="material-icons">access_time</i> Last Login Time : {{ Auth::user()->last_login_time }}
        </div>
    </div>
@endsection

{{-- <div class="alert alert-info modal" id="modal-delete">
  <button type="button" class="close" data-dismiss="alert modal" aria-label="Close">
    <i class="material-icons">close</i>
  </button>
  <span>
    <b> Info - </b> This is a regular notification made with ".alert-info"</span>
</div> --}}
<div class="modal fade" id="modal-delete">
  <div class="modal-dialog ">
    <div class="modal-content alert alert-info modal d-block ">
      <div class="modal-header">
        <p>Apakah anda yakin ingin menghapus category ini?</p>
        <button type="button" class="close pull-right" data-dismiss="alert modal" aria-label="Close">
          {{-- <i class="material-icons">close</i> --}}
        </button>
      </div>
      <div class="modal-footer">
        @foreach ($categories as $category)     
        <form id="formDelete" action="/dashboard/categories/{{ $category->slug }}" method="post" class="mt-2 pull-right" style="z-index: 3;">
          @method('delete')
          @csrf
          @endforeach
          <button class="btn btn-default" data-dismiss="modal">Tidak</button>
          <button class="btn btn-danger" type="submit">Iya</button>
        </form>
      </div>
    </div>
  </div>
</div>