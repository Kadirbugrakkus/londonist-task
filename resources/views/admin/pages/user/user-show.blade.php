@extends('admin._layouts.dashboard.master')
@push('title', 'User Detail')
@section('content')
    <div class="card">
        <div class="card-body p-0">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Contact Detail</h3>
                </div>
                <form action="{{ route('admin.users.store', $user->id) }}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" id="name"
                                       placeholder="Enter Name" value="{{ $user->name }}" readonly>
                            </div>
                            <div class="form-group col-6">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="email" id="email"
                                       placeholder="Enter Email" value="{{ $user->email }}" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
