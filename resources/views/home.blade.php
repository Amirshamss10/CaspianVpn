@extends('layout.layout')
@section('title', 'Dashboard')
@section('content')

@include('layout.alerts')

              <main> 
                    <div class="container-fluid px-4">
                         <h1 class="mt-4">Dashboard</h1> <br/>
                         <div class="row">
                        <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">updating</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <div class="small text-white stretched-link" href="#">Total Profit</div>
                                        <!-- <div class="small text-white"><i class="fas fa-angle-right"></i></div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">{{ $totalUser }}</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <div class="small text-white stretched-link" href="#">Total user</div>
                                </div>
                            </div>
                        </div>
                            
                      </main> 
  @endsection