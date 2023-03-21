@extends('layouts.panel-app')
@section('content')


<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">User Create</h1>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- ROW OPEN -->
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">User Create Form</h4>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" action="{{route('user.store')}}" method="POST">
                                @csrf
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">First Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="first_name" class="form-control" placeholder="please add name">
                                    </div>
                                </div>
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">Last Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="last_name" class="form-control" placeholder="please add last name">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-md-3 form-label" for="example-email">Email</label>
                                    <div class="col-md-9">
                                        <input type="email"  name="email" class="form-control" placeholder="Email" autocomplete="username">
                                    </div>
                                </div>
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">Tel</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="tel" name="phone">
                                    </div>
                                </div>
                                <div class=" row mb-4">
                                    <label class="col-md-3 form-label">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password" autocomplete="new-password">
                                    </div>
                                </div>
                               
                                <div class="row mb-0 mt-2">
                                    <button type="submit" class="btn btn-primary" >Add</button>
                                </div>
                               
                            </form>
                        </div>
                    </div>
                </div>
               
            </div>
            <!-- ROW CLOSED -->
        </div>
        <!-- CONTAINER CLOSED -->
    </div>
</div>

@endsection