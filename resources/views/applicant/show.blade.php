@extends('layouts.master')
@section('title', 'Applicant Show')
@section('content')

    <article class="content items-list-page">
        <div class="title-search-block">
            <div class="title-block">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="title"> Applicant Show</h3>
                    </div>
                </div>
            </div>
            <div class="items-search">
                <!-- <form class="form-inline">
                    <div class="input-group">
                        <input type="text" class="form-control boxed rounded-s" placeholder="Search for...">
                        <span class="input-group-btn">
                             <button class="btn btn-secondary rounded-s" type="button">
                                <i class="fa fa-search"></i>
                            </button> 
                        </span>
                    </div>
                </form> -->
            </div>
        </div>
        <div class="card items">
            <table class="table table-striped">
                <tr>
                    <td>Name</td>
                    <td>:</td>
                    <td>{{$single->name}}</td>
                </tr>
                <tr>
                    <td>Phone Number</td>
                    <td>:</td>
                    <td>{{$single->phone_number}}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td>{{$single->email}}</td>
                </tr>

                <tr>
                    <td>Job Title</td>
                    <td>:</td>
                    <td>{{$single->tilte}}</td>
                </tr>

                <tr>
                    <td>Job Type</td>
                    <td>:</td>
                    <td>{{$single->job_type}}</td>
                </tr>

                <tr>
                    <td>description</td>
                    <td>:</td>
                    <td>{{$single->description}}</td>
                </tr>

                <tr>
                    <td>Image</td>
                    <td>:</td>
                    <td><img src="{{ asset('image/'.$single->thumbnail) }}" alt="Thumbnail Image" width="350"></td>
                </tr>
            </table>

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
