@extends('layouts.master')
@section('title', 'Job Add')
@section('content')

    <article class="content item-editor-page">

        <div class="title-block">
            <h3 class="title"> Add new job <span class="sparkline bar" data-type="bar"></span></h3>
        </div>
        <form name="item" method="post" action="{{route('job.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="card card-block">
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label text-xs-right"> Title: </label>
                    <div class="col-sm-10">
                        <input type="text" name="title" class="form-control boxed" placeholder="Enter Title">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 form-control-label text-xs-right"> Job Types: </label>
                    <div class="col-sm-10">
                        <select name="job_types_id" id="job_types_id" class="form-control boxed">
                            <option value="">Select one</option>
                            @foreach($job_type as $data)
                            <option value="{{$data->id}}">{{$data->tilte}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 form-control-label text-xs-right"> Description: </label>
                    <div class="col-sm-10">
                        <textarea name="description" id="description" class="form-control boxed"></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 form-control-label text-xs-right"> Thumbnail: </label>
                    <div class="col-sm-10">
                        <input type="file" name="thumbnail" class="form-control boxed">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 form-control-label text-xs-right"> Status: </label>
                    <div class="col-sm-10">
                        <select name="status" id="status" class="form-control boxed">
                            <option value="">Select one</option>
                            <option value="1">Active</option>
                            <option value="0">Deactive</option>
                            
                        </select>
                    </div>
                </div>

                <div class="form-group row text-right">
                    <div class="col-sm-10 col-sm-offset-2">
                        <button type="submit" class="btn btn-primary"> Submit </button>
                    </div>
                </div>
            </div>
        </form>

    </article>
@endsection
