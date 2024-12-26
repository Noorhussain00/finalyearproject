@extends('layouts.admin')

@section('title', 'Manage Doctors')

@section('content')
    <div class="container-fluid">
        <h4 class="page-title">Manage Doctors</h4>

        <!-- Button Group for Manage Doctors -->
        <div class="row">
            <!-- Doctor List Button -->
            <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
                <a href="{{ route('doctor.list') }}" class="btn btn-info btn-block">
                    <i class="fa fa-list"></i> Doctor List
                </a>
            </div>

            <!-- Add New Doctor Button -->
            <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
                <a href="{{ route('doctor.create') }}" class="btn btn-success btn-block">
                    <i class="fa fa-plus-circle"></i> Add New Doctor
                </a>
            </div>

            <!-- Doctor Profiles Button (you can change this to a list of profiles if needed) -->
            <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
                <a href="{{ route('doctor.profile', ['doctor' => 1]) }}" class="btn btn-primary btn-block">
                    <i class="fa fa-user-md"></i> Doctor Profiles
                </a>
            </div>

            <!-- Availability Management Button -->
            <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
                <a href="{{ route('doctor.availability', ['doctor' => 1]) }}" class="btn btn-warning btn-block">
                    <i class="fa fa-calendar-alt"></i> Availability Management
                </a>
            </div>
        </div>
    </div>
@endsection
