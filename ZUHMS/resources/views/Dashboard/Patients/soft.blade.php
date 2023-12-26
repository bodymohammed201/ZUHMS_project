@extends('Dashboard.layouts.master')
@section('css')
<link href="{{URL::asset('dashboard/plugins/notify/css/notifIt.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
	<div class="my-auto">
		<div class="d-flex">
			<h4 class="content-title mb-0 my-auto">Patient</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Patient list</span>
		</div>
	</div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
@include('Dashboard.messages_alert')
<!-- row opened -->
<div class="row row-sm">
	<!--div-->
	<div class="col-xl-12">
		<div class="card">
			<div class="card-header pb-0">
				<div class="d-flex justify-content-between">
				</div>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table text-md-nowrap" id="example1">
						<thead>
							<tr>
								<th>#</th>
								<th>patient Name </th>
								<th>E-mail </th>
								<th>Birth Date </th>
								<th>Mobile Number </th>
								<th>Gender</th>
								<th>blood type </th>
								<th>Address</th>
								<th>Room</th>
								<th>processes</th>
								
							</tr>
						</thead>
						<tbody>
							@foreach($Patient as $Patient)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td><a href="{{route('Patients.show',$Patient->id)}}">{{$Patient->name}}</a></td>
								<td>{{$Patient->email}}</td>
								<td>{{$Patient->Date_Birth}}</td>
								<td>{{$Patient->Phone}}</td>
								<td>{{$Patient->Gender == 1 ? 'Male' :'Female'}}</td>
								<td>{{$Patient->Blood_Group}}</td>
								<td>{{$Patient->Address}}</td>
								<td>
									@if($Patient->status == 0)
										{{ "null" }}
									@else
										{{ $Patient->room->room }}
									@endif
								</td>
								<td>
								
					</form>
					
					<form style="display: flex;" action="{{route('Soft.destroy',$Patient->id)}}" method="post">
                              @csrf
                             <input type="hidden" name="_method" value="Delete">
                                <button type="submit" class="btn btn-danger" style="flex: 1;">Delete</button>
                    </form>

                    <form style="display: flex;" action="{{route('Soft.edit',$Patient->id)}}" method="get">
                             @csrf
                             <input type="hidden" name="_method" value="PATCH">
                                <button type="submit" class="btn btn-success" style="flex: 1;">Restore</button>
                    </form>
			

																	
								</td>
							</tr>
							@include('Dashboard.Patients.Deleted')
							@endforeach
						</tbody>
					</table>
				</div>
			</div><!-- bd -->
		</div><!-- bd -->
	</div>
	<!--/div-->
</div>
<!-- /row -->
</div>
<!-- Container closed -->
</div>
<!-- main-content closed -->
@endsection
@section('js')
<!--Internal  Notify js -->
<script src="{{URL::asset('dashboard/plugins/notify/js/notifIt.js')}}"></script>
<script src="{{URL::asset('/plugins/notify/js/notifit-custom.js')}}"></script>
@endsection
