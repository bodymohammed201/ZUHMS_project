@extends('Dashboard.layouts.master')
@section('css')
<!--Internal   Notify -->
<link href="{{URL::asset('dashboard/plugins/notify/css/notifIt.css')}}" rel="stylesheet" />
@endsection
@section('title')
Add New Car
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">Ambluance</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Add New Car</span>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
@include('Dashboard.messages_alert')
<!-- row -->
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <form action="{{route('Ambulance.store')}}" method="post" autocomplete="off">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <label>Car Number </label>
                            <input type="text" name="car_number" value="{{old('car_number')}}" class="form-control @error('car_number') is-invalid @enderror">
                        </div>

                        <div class="col">
                            <label>Car Model </label>
                            <input type="text" name="car_model" value="{{old('car_model')}}" class="form-control @error('car_model') is-invalid @enderror">
                        </div>

                        <div class="col">
                            <label>Manufacturing Year </label>
                            <input type="number" name="car_year_made" value="{{old('car_year_made')}}" class="form-control @error('car_year_made') is-invalid @enderror">
                        </div>

                        <div class="col">
                            <label>Car type </label>
                            <select class="form-control" name="car_type">
                                <option value="1">Owened</option>
                                <option value="2">Rent</option>
                            </select>
                        </div>

                    </div>
                    <br>

                    <div class="row">
                        <div class="col-3">
                            <label>Driver Name </label>
                            <input type="text" name="driver_name" value="{{old('driver_name')}}" class="form-control @error('driver_name') is-invalid @enderror">
                        </div>

                        <div class="col-3">
                            <label>Driving License Number </label>
                            <input type="number" name="driver_license_number" value="{{old('driver_license_number')}}" class="form-control @error('driver_license_number') is-invalid @enderror">
                        </div>

                        <div class="col-6">
                            <label>Phone Number </label>
                            <input type="number" name="driver_phone" value="{{old('driver_phone')}}" class="form-control @error('driver_phone') is-invalid @enderror">
                        </div>

                    </div>

                    <br>

                    <div class="row">
                        <div class="col">
                            <label>Comments</label>
                            <textarea rows="5" cols="10" class="form-control" name="notes"></textarea>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col">
                            <button class="btn btn-success">Save Data </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')
<script src="{{URL::asset('dashboard/plugins/notify/js/notifIt.js')}}"></script>
<script src="{{URL::asset('/plugins/notify/js/notifit-custom.js')}}"></script>
@endsection