@extends('admin._layouts.dashboard.master')
@push('title', 'User List')
@section('content')
    <div class="card">
        <div class="card-body p-0 table-striped table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Ad Soyad</th>
                    <th>Email</th>
                    <th>Rol</th>
                    <th>Oluşturulma Tarihi</th>
                    <th>İşlem</th>
                </tr>
                </thead>
                <tbody class="w-100">
                @foreach( $users as $key => $user)
                    @if( $user->id == null )
                        @continue
                    @endif
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td> {{$user->name}}</td>
                        <td> {{$user->email}}</td>
                        <td>
                            @if ($user->roles->isEmpty())
                                Rol yok
                            @else
                                @foreach ($user->roles as $role)
                                    <span>{{ $role->name }}</span>{{ !$loop->last ? ', ' : '' }}
                                @endforeach
                            @endif
                        </td>
                        <td> {{$user->created_at}}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('admin.users.show', $user->id) }}" class="btn btn-primary btn-sm mr-2">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <form id="deleteForm" action="{{ route('admin.users.destroy', $user->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                </form>
                                <button form="deleteForm" type="submit" class="btn btn-danger blacklist btn-sm mr-2" data-id="">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
