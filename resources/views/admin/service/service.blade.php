@extends('app-admin')
@section('admin-content')
    @include('message')
    <div   style="float: right;margin: 0 15px 5px 0;">
        <a href="{{action('AdminController@getAddService')}}">
            <button type="button" class="btn btn-danger"> Add Service</button>
        </a>

    </div>
    <div class="col-md-12">
        <!-- BEGIN SAMPLE TABLE PORTLET-->

        <div class="portlet box red">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-cogs"></i>Service List
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse" data-original-title="" title="">
                    </a>
                </div>

            </div>
            <div class="portlet-body">
                @if(count($services) != '')
                    <div class="table-scrollable">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>description</th>
                                <th>Images</th>
                                <th>Date</th>
                                <th>View Skills</th>
                                <th>Edit/Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($services as $service)
                                <tr>
                                    <td>{{$service->title_en}}</td>
                                    <td>{{substr($service->description_en,0,7)}}..</td>
                                    <td>
                                        <img style="width: 114px;height: 56px" src="/assets/images/service-images/{{$service->images}}" alt="">
                                    </td>


                                    <td>{{date('d/m/Y', strtotime($service->created_at))}}</td>
                                    <td>
                                        <a href="{{action('AdminController@getViewSkills',$service->id)}}">
                                            <i class="glyphicon glyphicon-eye-open"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{action('AdminController@getEditService',$service->id)}}">
                                            <button class="btn green">
                                                <i class="glyphicon glyphicon-pencil"></i>
                                            </button>
                                        </a>
                                        <button data-href="{{action('AdminController@getServiceDelete',$service->id)}}" data-toggle="modal" data-target="#myModal" type="button" class="btn btn-danger click_del">
                                            <i class="fa fa-trash-o bigger-120"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <h1>Not Services</h1>
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