@extends('Dashboard.layouts.master')
@section('title')
Rays
@stop
@section('css')
<link href="{{URL::asset('dashboard/plugins/notify/css/notifIt.css')}}" rel="stylesheet" />
@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">Rays</h4>
            <span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                View all</span>
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
        <div class="card mg-b-20">
            <div class="card-header pb-0">

                <a href="{{route('scans.create')}}" class="btn btn-primary" role="button" aria-pressed="true">Add Ray Scan</a>


            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table key-buttons text-md-nowrap">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th><input name="select_all" id="example-select-all" type="checkbox" /></th>
                                <th>Scan name</th>
                                <th>Price</th>
                                <th>Prosceese</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($scans as $scan)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <input type="checkbox" name="delete_select" value="{{$scan->id}}" class="delete_select">
                                </td>
                                <td>{{ $scan->name }}</td>
                                <td>{{ $scan->price }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-outline-primary btn-sm" data-toggle="dropdown" type="button">Processes<i class="fas fa-caret-down mr-1"></i></button>
                                        <div class="dropdown-menu tx-13">
                                            <a class="dropdown-item" href="{{route('scans.edit',$scan->id)}}"><i style="color: #0ba360" class="text-success ti-user"></i>&nbsp;&nbsp;Edit</a>
                                            <a class="modal-effect btn btn-sm btn-danger" data-effect="effect-scale" data-toggle="modal" href="#delete{{$scan->id}}"><i class="las la-trash"></i>Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @include('Dashboard.Ray.delete')
                            @include('Dashboard.Ray.delete_select')

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
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

<script>
    $(function() {
        jQuery("[name=select_all]").click(function(source) {
            checkboxes = jQuery("[name=delete_select]");
            for (var i in checkboxes) {
                checkboxes[i].checked = source.target.checked;
            }
        });
    })
</script>


<script type="text/javascript">
    $(function() {
        $("#btn_delete_all").click(function() {
            var selected = [];
            $("#example input[name=delete_select]:checked").each(function() {
                selected.push(this.value);
            });

            if (selected.length > 0) {
                $('#delete_select').modal('show')
                $('input[id="delete_select_id"]').val(selected);
            }
        });
    });
</script>



@endsection