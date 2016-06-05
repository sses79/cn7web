@extends('backend/layouts/default')

{{-- Page title --}}
@section('title')
Timeline Item List
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap.css') }}" />
@stop


{{-- Page content --}}
@section('content')
<section class="content-header">
    <h1>Timeline Item List</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}">
                <i class="fa fa-fw fa-home"></i>
                Dashboard
            </a>
        </li>
        <li class="active">Timeline Items list</li>
    </ol>
</section>

<!-- Main content -->
<section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h4 class="panel-title pull-left"><i class="fa fa-fw fa-book"></i>
                    Timeline Items List
                </h4>
                <div class="pull-right">
                    <a href="{{ URL::to('backend/news/create') }}" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-plus"></span> Add new item</a>
                </div>
            </div>
            <br />
            <div class="panel-body">
                <table class="table table-bordered" id="table">
                    <thead>
                        <tr class="filters">
                            <th>ID</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Create at</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if(!empty($newses))
                        @foreach ($newses as $news)
                            <tr>
                                <td>{{ $news->id }}</td>
                                <td>{{ $news->title }}</td>
                                <td>{{ $news->content }}</td>
                                <td>{{ $news->created_at->diffForHumans() }}</td>
                                <td>
{{--                                    <a href="{{ URL::to('backend/news/' . $news->id . '/show' ) }}"><i class="fa fa-fw fa-star text-primary" title="view news &amp; comments"></i></a>--}}
                                    <a href="{{ URL::to('backend/news/' . $news->id . '/edit' ) }}"><i class="fa fa-fw fa-pencil text-warning" title="update news"></i></a>
                                    <a href="{{ route('confirm-delete/news', $news->id) }}" data-toggle="modal" data-target="#delete_confirm"><i class="fa fa-fw fa-times text-danger" title="delete news"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>    <!-- row-->
</section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/jquery.dataTables.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.bootstrap.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        });
    </script>

<div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="user_delete_confirm_title" aria-hidden="true">
	<div class="modal-dialog">
    	<div class="modal-content"></div>
  </div>
</div>
<script>
$(function () {
	$('body').on('hidden.bs.modal', '.modal', function () {
		$(this).removeData('bs.modal');
	});
});
</script>
@stop