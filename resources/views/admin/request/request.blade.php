@extends('app-admin')
@section('admin-content')
    @include('message')

    <div class="col-md-12">
        <!-- BEGIN SAMPLE TABLE PORTLET-->

        <div class="portlet box red">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-cogs"></i>Request List
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse" data-original-title="" title="">
                    </a>
                </div>

            </div>
            <div class="portlet-body">
                @if(count($requests) != '')
                    <div class="table-scrollable">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Company</th>
                                <th>Contact person</th>
                                <th>E-mail:</th>
                                <th>Status</th>
                                <th>View Request</th>
                                <th>Date</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($requests as $request)
                            <tr>
                                <td>{{$request->company}}</td>

                                <td>{{$request->contact_person}}</td>
                                <td>{{$request->email}}</td>
                                <td>
                                    @if($request->active_view == 1)
                                        <span class="label label-sm label-success">
                                          Read
                                        </span>
                                    @else
                                        <span class="label label-sm label-warning">
                                            Unread
                                        </span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{action('AdminController@getViewRequest',$request->id)}}">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </td>
                                <td>{{date('d/m/Y', strtotime($request->created_at))}}</td>


                                <td>
                                    <button data-href="{{action('AdminController@getRequestDelete',$request->id)}}" data-toggle="modal" data-target="#myModal" type="button" class="btn btn-danger click_del">
                                        <i class="fa fa-trash-o bigger-120"></i>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <h1>Not Request</h1>
                @endif
            </div>

        </div>

        <!-- END SAMPLE TABLE PORTLET-->
    </div>



    {{--delete modal--}}
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Do you want delete this file</h4>
                </div>
                <div class="modal-footer">
                    <a class="del_yes" href=#">
                        <button  class="btn btn-danger delete_modal">Yes</button>
                    </a>
                    <button type="button" class="btn btn-success" data-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>
    {{--end delete modal--}}

@endsection

@section('script')
    {!! HTML::script( asset('assets/admin/js/delete.js') ) !!}
    {!! HTML::script( asset('assets/admin/js/tab-url.js') ) !!}
@endsection