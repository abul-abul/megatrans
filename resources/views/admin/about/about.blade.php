@extends('app-admin')
@section('admin-content')
    @include('message')
    <div   style="float: right;margin: 0 15px 5px 0;">
        @if(count($abouts) == '')
        <a href="{{action('AdminController@getAddAbout')}}">
            <button type="button" class="btn btn-danger"> Add About</button>
        </a>
        @endif
    </div>
    <div class="col-md-12">
        <!-- BEGIN SAMPLE TABLE PORTLET-->

        <div class="portlet box red">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-cogs"></i>About
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse" data-original-title="" title="">
                    </a>
                </div>

            </div>
            <div class="portlet-body">
                @if(count($abouts) != '')
                    <div class="table-scrollable">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>description</th>
                                <th>Images</th>
                                <th>Alt</th>
                                <th>Text</th>
                                <th>Date</th>
                                <th>Edit/Delete</th>
                            </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>{{$abouts->title_en}}</td>
                                    <td>{{substr($abouts->description_en,0,7)}}..</td>
                                    <td>
                                        <img style="width: 114px;height: 56px" src="/assets/images/about-images/{{$abouts->images}}" alt="">
                                    </td>
                                    <td>{{$abouts->alt}}</td>
                                    <td>{{$abouts->text}}</td>
                                    <td>{{date('d/m/Y', strtotime($abouts->created_at))}}</td>
                                    <td>
                                        <a href="{{action('AdminController@getEditAbout',$abouts->id)}}">
                                            <button class="btn green">
                                                <i class="glyphicon glyphicon-pencil"></i>
                                            </button>
                                        </a>
                                        <button data-href="{{action('AdminController@getAboutDelete',$abouts->id)}}" data-toggle="modal" data-target="#myModal" type="button" class="btn btn-danger click_del">
                                            <i class="fa fa-trash-o bigger-120"></i>
                                        </button>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                @else
                    <h1>Not About</h1>
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