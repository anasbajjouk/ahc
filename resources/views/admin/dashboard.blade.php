
@extends('admin.layout.admin')

@section('title', 'Dashbaord')

@section('pageTitle', 'Dashbaord')

@section('content')


<section class="content">

    <div class="container-fluid">

        <!-- Small boxes (Stat box) -->
        <div class="row">
            
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $compositions }}</h3>

                    <p>Compositions</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info
                    <i class="fa fa-arrow-circle-right"></i>
                </a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $videos }}
                    <sup style="font-size: 20px"></sup>
                    </h3>

                    <p>Videos</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info
                    <i class="fa fa-arrow-circle-right"></i>
                </a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-dark">
                <div class="inner">
                    <h3>{{ $users }}</h3>

                    <p>User Registrations</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info
                    <i class="fa fa-arrow-circle-right"></i>
                </a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{ $authors }}</h3>

                    <p>Authors</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info
                    <i class="fa fa-arrow-circle-right"></i>
                </a>
                </div>
            </div>
            <!-- ./col -->

            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-primary">
                <div class="inner">
                    <h3>{{ $periods }}</h3>

                    <p>Periods</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info
                    <i class="fa fa-arrow-circle-right"></i>
                </a>
                </div>
            </div>
            <!-- ./col -->

            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $events }}</h3>

                    <p>Events</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info
                    <i class="fa fa-arrow-circle-right"></i>
                </a>
                </div>
            </div>
            <!-- ./col -->

            <div class="col-lg-6 col-12">
                <!-- small box -->
                <div class="small-box bg-secondary ">
                <div class="inner">
                    <h3>{{-- $visits24h--}}</h3>
                    
                    <p>Visitors</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info
                    <i class="fa fa-arrow-circle-right"></i>
                </a>
                </div>
            </div>
            <!-- ./col -->

            </div>
        <!-- /.row -->

    </div>

</section>


@endsection