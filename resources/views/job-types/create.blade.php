@extends('layouts.master')
@section('title', 'Job Type Add')
@section('content')

    <article class="content item-editor-page">

        <div class="title-block">
            <h3 class="title"> Add new job type <span class="sparkline bar" data-type="bar"></span></h3>
        </div>
        <form name="item" method="post" action="{{route('job-types.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="card card-block">
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label text-xs-right"> Title: </label>
                    <div class="col-sm-10">
                        <input type="text" name="title" class="form-control boxed" placeholder="Enter Title">
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
