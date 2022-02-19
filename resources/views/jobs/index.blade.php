@extends('layouts.master')
@section('title', 'Job List')
@section('content')

    <article class="content items-list-page">
        <div class="title-search-block">
            <div class="title-block">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="title"> Job List</h3><a href="{{route('job.create')}}" class="btn btn-primary btn-sm rounded-s"> Add New </a>
                    </div>
                </div>
            </div>
            <div class="items-search">
                <form class="form-inline">
                    <div class="input-group">
                        <input type="text" class="form-control boxed rounded-s" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary rounded-s" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <div class="card items">
            <ul class="item-list striped">
                <li class="item item-list-header">
                    <div class="item-row">
                        
                        <div class="item-col item-col-header">
                            <div>
                                <span>ID</span>
                            </div>
                        </div>

                        <div class="item-col item-col-header ">
                            <div>
                                <span>Title</span>
                            </div>
                        </div>

                        <div class="item-col item-col-header ">
                            <div>
                                <span>Type Title</span>
                            </div>
                        </div>

                        <div class="item-col item-col-header ">
                            <div>
                                <span>Description</span>
                            </div>
                        </div>

                        <div class="item-col item-col-header ">
                            <div>
                                <span>Status</span>
                            </div>
                        </div>
                        
                        <div class="item-col item-col-header fixed item-col-actions-dropdown"></div>
                    </div>
                </li>
                @foreach($job as $key => $data)
                    <li class="item">
                        <div class="item-row">
                            
                            <div class="item-col pull-left ">
                                <div class="item-heading">ID</div>
                                <div>
                                    {{$key + 1}}
                                </div>
                            </div>

                            <div class="item-col pull-left ">
                                <div class="item-heading">Title</div>
                                <div>
                                    {{$data->tilte}}
                                </div>
                            </div>

                            <div class="item-col pull-left ">
                                <div class="item-heading">Type Title</div>
                                <div>
                                    {{$data->type_title}}
                                </div>
                            </div>

                            <div class="item-col pull-left ">
                                <div class="item-heading">description</div>
                                <div>
                                    {{$data->description}}
                                </div>
                            </div>

                            <div class="item-col pull-left ">
                                <div class="item-heading">status</div>
                                <div>
                                    @if($data->status == '1')
                                        Active
                                    @else
                                        Deactive
                                    @endif
                                </div>
                            </div>

                            <div class="item-col fixed item-col-actions-dropdown">
                                        <div class="item-actions-dropdown">
                                            <a class="item-actions-toggle-btn">
                                                <span class="inactive">
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </span>
                                                <span class="active">
                                                    <i class="fa fa-chevron-circle-right"></i>
                                                </span>
                                            </a>
                                            <div class="item-actions-block">
                                                <ul class="item-actions-list">
                                                    <li>
                                                        <a class="edit" href="{{ URL::to('admin/job/' . $data->id . '/edit') }}">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                       <a class="remove" href="{{ URL::to('admin/job/deactive', $data->id) }}"> 
                                                           <i class="fa fa-times"></i>  
                                                        </a>    
                                                    </li>    
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        <!-- <nav class="text-right">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#"> Prev </a>
                </li>
            </ul>
        </nav> -->
    </article>
@endsection
