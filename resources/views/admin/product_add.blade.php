
@extends('base')

@section('content')
 
<div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-12 mb-2 mt-1">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h5 class="content-header-title float-left pr-1 mb-0">Add  Category</h5>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb p-0 mb-0">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Category</a>
                                    </li>
                                    <li class="breadcrumb-item active">Add  Category
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Simple Validation start -->
                <section class="simple-validation">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Add  Category</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        
                                        <form class="form-horizontal" novalidate>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                        	 <label for="catname">Cat Name</label>
                                                            <input id="catname" type="text" name="text" class="form-control" placeholder="First Name" required data-validation-required-message="This First Name field is required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                       <label for="status">Status</label>
                                                            <select name="status" id="status" class="form-control controls">
                                                                <option value="Active">Active</option>
                                                                <option value="Inactive">Inactive</option>
                                                               
                                                            </select>
                                                    </div>
                                                </div>
                                            </div>

                                             <!-- full Editor start -->
                                                <section class="full-editor">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <h4 class="card-title">Full Editor</h4>
                                                                </div>
                                                                <div class="card-content collapse show">
                                                                    <div class="card-body">
                                                                       
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <div id="full-wrapper">
                                                                                    <div id="full-container">
                                                                                        <div class="editor">
                                                                                           
                                                                                           
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <!-- full Editor end -->
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Input Validation end -->

             

                
            </div>
        </div>
    </div>





   @endsection