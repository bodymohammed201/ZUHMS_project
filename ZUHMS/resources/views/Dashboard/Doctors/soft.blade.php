@extends('Dashboard.layouts.master')
@section('css')
<link href="{{URL::asset('dashboard/plugins/notify/css/notifIt.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
	<div class="my-auto">
		<div class="d-flex">
			<h4 class="content-title mb-0 my-auto">Doctor</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Doctor list</span>
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
								<th>Doctor Name </th>
								<th>E-mail </th>
							
								<th>Mobile Number </th>
			
								<th>processes</th>
								
							</tr>
						</thead>
						<tbody>
							@foreach($doctor as $doctor)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td><a href="{{route('Doctors.show',$doctor->id)}}">{{$doctor->name}}</a></td>
								<td>{{$doctor->email}}</td>
								<td>{{$doctor->phone}}</td>
							
						
								
								<td>
								
					</form>
				
					<form style="display: flex;" action="{{route('Soft.update',$doctor->id)}}" method="post">
                              @csrf
                             <input type="hidden" name="_method" value="PATCH">
                                <button type="submit" class="btn btn-danger" style="flex: 1;">Delete</button>
                    </form>

                    <form style="display: flex;" action="{{route('Soft.show',$doctor->id)}}" method="get">
                             @csrf
                             <input type="hidden" name="_method" value="PATCH">
                                <button type="submit" class="btn btn-success" style="flex: 1;">Restore</button>
                    </form>
							
								</td>
							</tr>
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
