@extends('layouts.master')
@section('title', 'Job Edit')
@section('content')

    <article class="content item-editor-page">

        <div class="title-block">
            <h3 class="title"> Edit job <span class="sparkline bar" data-type="bar"></span></h3>
        </div>
        <form action="{{route('job.update', $job->id)}}" enctype="multipart/form-data" method="post">
            @method('PUT')
            @csrf
            <div class="card card-block">
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label text-xs-right"> Title: </label>
                    <div class="col-sm-10">
                        <input type="text" name="title" class="form-control boxed" value="{{$job->tilte}}">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 form-control-label text-xs-right"> Job Types: </label>
                    <div class="col-sm-10">
                        <select name="job_types_id" id="job_types_id" class="form-control boxed">
                            @foreach($job_type as $data)
                            
                            <option {{ $data->id == $job->job_types_id ? 'Selected'  : '' }} value="{{$data->id}}">{{$data->tilte}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 form-control-label text-xs-right"> Description: </label>
                    <div class="col-sm-10">
                        <textarea name="description" id="description" class="form-control boxed">{{$job->description}}</textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 form-control-label text-xs-right"> Thumbnail: </label>
                    <div class="col-sm-10">
                        <input type="file" name="thumbnail" class="form-control boxed"> <br>
                        <img src="{{ asset('image/'.$job->thumbnail) }}" alt="Thumbnail Image" width="350">
                    </div>

                </div>

                <div class="form-group row">
                    <label class="col-sm-2 form-control-label text-xs-right"> Status: </label>
                    <div class="col-sm-10">
                        <select name="status" id="status" class="form-control boxed">
                            <option {{ $job->status == '1' ? 'Selected'  : '' }} value="1">Active</option>
                            <option {{ $job->status == '0' ? 'Selected'  : '' }} value="0">Deactive</option>
                            
                        </select>
                    </div>
                </div>

                <div class="form-group row text-right">
                    <div class="col-sm-10 col-sm-offset-2">
                        <button type="submit" class="btn btn-primary"> Update </button>
                    </div>
                </div>
            </div>
        </form>

    </article>
@endsection
