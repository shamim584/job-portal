@extends('layouts.master')
@section('title', 'Applicant List')
@section('content')

    <article class="content items-list-page">
        <div class="title-search-block">
            <div class="title-block">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="title"> Applicant List</h3>
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
                                <span>Name</span>
                            </div>
                        </div>

                        <div class="item-col item-col-header ">
                            <div>
                                <span>Phone Number</span>
                            </div>
                        </div>

                        <div class="item-col item-col-header ">
                            <div>
                                <span>Job Title</span>
                            </div>
                        </div>

                        <div class="item-col item-col-header ">
                            <div>
                                <span>Job Type</span>
                            </div>
                        </div>

                        
                        <div class="item-col item-col-header fixed item-col-actions-dropdown"></div>
                    </div>
                </li>
                @foreach($applicant as $key => $data)
                    <li class="item">
                        <div class="item-row">
                            
                            <div class="item-col pull-left ">
                                <div class="item-heading">ID</div>
                                <div>
                                    {{$key + 1}}
                                </div>
                            </div>

                            <div class="item-col pull-left ">
                                <div class="item-heading">Name</div>
                                <div>
                                    {{$data->name}}
                                </div>
                            </div>

                            <div class="item-col pull-left ">
                                <div class="item-heading">Phone Number</div>
                                <div>
                                    {{$data->phone_number}}
                                </div>
                            </div>

                            <div class="item-col pull-left ">
                                <div class="item-heading">Job Title</div>
                                <div>
                                    {{$data->tilte}}
                                </div>
                            </div>

                            <div class="item-col pull-left ">
                                <div class="item-heading">Job Type</div>
                                <div>
                                    {{$data->job_type}}
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
                                                        <a class="edit" href="{{ URL::to('admin/applicant/show', $data->id) }}">
                                                            <i class="fa fa-file"></i>
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
