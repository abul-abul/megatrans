@extends('app-admin')
@section('admin-content')
    @include('message')

    <div class="col-md-12">
        <!-- BEGIN SAMPLE TABLE PORTLET-->

        <div class="portlet box red">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-cogs"></i>Contact List
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse" data-original-title="" title="">
                    </a>
                </div>

            </div>
            <div class="portlet-body">
                @if(count($contacts) != '')
                    <div class="table-scrollable">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Team</th>
                                <th>Message</th>
                                <th>Status</th>
                                <th>View Contact</th>
                                <th>Date</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($contacts as $contact)
                                <tr>
                                    <td>{{$contact->name}}</td>

                                    <td>{{$contact->email}}</td>
                                    <td>{{$contact->team}}</td>
                                    <td>{{$contact->message}}</td>
                                    <td>
                                        @if($contact->active_view == 1)
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
                                        <a href="{{action('AdminController@getViewContact',$contact->id)}}">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </td>
                                    <td>{{date('d/m/Y', strtotime($contact->created_at))}}</td>

                                    <td>
                                        <button data-href="{{action('AdminController@getDeleteContact',$contact->id)}}" data-toggle="modal" data-target="#myModal" type="button" class="btn btn-danger click_del">
                                            <i class="fa fa-trash-o bigger-120"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <h1>Not Contact</h1>
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