@extends('Dashboard.layouts.master')
@section('css')
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
	<div class="my-auto">
		<div class="d-flex">
			<h4 class="content-title mb-0 my-auto">Rooms</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ ROOM</span>
		</div>
	</div>

</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->


<div class="row row-sm">
	<div class="col-xl-12">
		<div class="card">
			<div class="card-header pb-0">
				<div class="d-flex justify-content-between">

				</div>

			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table text-md-nowrap" id="example">
						<thead>
							<tr>
								<th class="wd-5p border-bottom-0">#</th>
								<th class="wd-15p border-bottom-0">Room id</th>
								<th class="wd-10p border-bottom-0">Patient id</th>
								<th class="wd-10p border-bottom-0">Patient name</th>
								<th class="wd-10p border-bottom-0">Date</th>
							</tr>
						</thead>
						<tbody>

							@foreach($rooms as $room )

							<tr>
								<td>{{$room->id}}</td>
								<td>{{$room->room}}</td>
								<td>{{$room->patient->id ?? 'No patient'}}</td>
								<td>{{$room->patient->name?? 'No patient'}}</td>
								<td>{{$room->created_at}}</td>
							</tr>
							@endforeach



						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<!--/div-->

</div>


<!-- row closed -->
</div>
<!-- Container closed -->
</div>
<!-- main-content closed -->
@endsection
@section('js')
@endsection