@extends('admin._layouts.dashboard.master')
@push('title', 'Contact Detail')
@section('content')
    <div class="card">
        <div class="card-body p-0">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Contact Detail</h3>
                </div>
                <form action="{{ route('admin.contact.store', $contact->id) }}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-4">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control" name="first_name" id="first_name"
                                       placeholder="Enter First Name" value="{{ $contact->first_name }}">
                            </div>
                            <div class="form-group col-4">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="form-control" name="last_name" id="last_name"
                                       placeholder="Enter Last Name" value="{{ $contact->last_name }}">
                            </div>
                            <div class="form-group col-4">
                                <label for="country_id">Country</label>
                                <select name="country_id" class="form-select form-select-sm custom-select"
                                        aria-label="Country" required>
                                    <option disabled>Country</option>
                                    @foreach($countries as $country)
                                        <option
                                            value="{{ $country->id }}" {{ $contact->country_id == $country->id ? 'selected' : '' }}>
                                            {{ $country->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="phone">Phone</label>
                                <input type="tel" class="form-control" name="phone" id="phone"
                                       placeholder="Enter Phone Number" value="{{ $contact->phone }}">
                            </div>
                            <div class="form-group col-6">
                                <label for="meeting_date">Meeting Date</label>
                                <input type="date" class="form-control" name="meeting_date" id="meeting_date"
                                       placeholder="Select Date" value="{{ $contact->meeting_date->format('Y-m-d') }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="budget">Budget</label>
                                <input type="text" class="form-control" name="budget" id="budget"
                                       placeholder="Enter Budget" value="{{ $contact->budget }}">
                            </div>
                            <div class="form-group col-6">
                                <label for="bedrooms_count">Bedroom Count</label>
                                <input type="number" class="form-control" name="bedrooms_count" id="bedrooms_count"
                                       placeholder="Enter Bedroom Count" value="{{ $contact->bedrooms_count }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email"
                                       placeholder="Enter Email" value="{{ $contact->email }}">
                            </div>
                            <div class="form-group col-6">
                                <label for="designation_id">Designation</label>
                                <select name="designation_id" class="form-select form-select-sm custom-select"
                                        aria-label="Designation" required>
                                    <option disabled>Designation</option>
                                    @foreach( $designations as $designation)
                                        <option
                                            value="{{ $designation->id }}" {{ $contact->designation_id == $designation->id ? 'selected' : '' }}>
                                            {{ $designation->name }}
                                        </option>
                                    @endforeach
                                </select>
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
