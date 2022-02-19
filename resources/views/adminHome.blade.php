@extends('layouts.master')
@section('title', 'Dashboard')
@section('content')

<article class="content dashboard-page">
    <section class="section">
        <div class="row sameheight-container">
            <div class="col-md-12">

                <div class="card sameheight-item stats" data-exclude="xs" style="245px;">
                    <div class="card-block">
                        <div class="title-block">
                            <h4 class="title"> Overview </h4>
{{--                            <p class="title-description"> Website metrics for <a href="index-2.html"> your awesome project </a>--}}
{{--                            </p>--}}
                        </div>
                        <div class="row row-sm stats-container">
                            <div class="col-12 col-sm-6 stat-col btn-secondary text-center">
                                <span>Total Bill</span>
                                <br>
                                <p></p>
                            </div>
                            <div class="col-12 col-sm-6 stat-col btn-success text-center">
                                <span>Total Forwading</span>
                                <br>
                                <p></p>
                            </div>
                            <div class="col-12 col-sm-6 stat-col btn-primary text-center">
                                <span>Total Company</span>
                                <br>
                                <p></p>
                            </div>
                            <div class="col-12 col-sm-6  stat-col btn-danger text-center">
                                <span>Total Expense</span>
                                <br>
                                <p></p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        

            <div class="col-md-12">
                <div class="card sameheight-item stats" data-exclude="xs">
                    <div class="row">
                        <div class="card-block col-sm-6 col-md-6">
                            <div class="title-block">
                                <h4 class="title"> Recent Started </h4>
                                {{--                            <p class="title-description"> Website metrics for <a href="index-2.html"> your awesome project </a>--}}
                                {{--                            </p>--}}
                            </div>
                            <div class="row row-sm stats-container">
                                <div class="col-12 stat-col">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </table>
                                </div>

                            </div>
                        </div>
                        <div class="card-block col-sm-6 col-md-6">
                            <div class="title-block">
                                <h4 class="title"> Recent Completed </h4>
                                {{--                            <p class="title-description"> Website metrics for <a href="index-2.html"> your awesome project </a>--}}
                                {{--                            </p>--}}
                            </div>
                            <div class="row row-sm stats-container">
                                <div class="col-12 stat-col">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card sameheight-item" data-exclude="xs" id="dashboard-history">
                    <div class="card-header card-header-sm bordered">
                        <div class="header-block">
                            <h3 class="title">History</h3>
                        </div>
                        <ul class="nav nav-tabs pull-right" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#visits" role="tab" data-toggle="tab">Visits</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#downloads" role="tab" data-toggle="tab">Downloads</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-block">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active fade show" id="visits">
                                <p class="title-description"> Number of unique visits last 30 days </p>
                                <div id="dashboard-visits-chart"></div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="downloads">
                                <p class="title-description"> Number of downloads last 30 days </p>
                                <div id="dashboard-downloads-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card tasks sameheight-item" data-exclude="xs,sm" style="height: 490px;">
                    <div class="card-header bordered">
                        <div class="header-block">
                            <h3 class="title"> Withdrawal Request List </h3>
                        </div>
{{--                        <div class="header-block pull-right">--}}
{{--                            <a href="#" class="btn btn-primary btn-sm rounded pull-right"> Add new </a>--}}
{{--                        </div>--}}
                    </div>
                    <div class="card-block">
                        <div class="tasks-block">
                            <ul class="item-list">
                                <li class="item">
                                    <div class="item-row">
                                        <div class="item-col item-col-title">
                                            <label>
                                                <input class="checkbox" type="checkbox" checked="">
                                                <span>Confession</span>
                                            </label>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </section>

</article>

@endsection
