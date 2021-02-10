
@extends('base')

@section('content')
 
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-12 mb-2 mt-1">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h5 class="content-header-title float-left pr-1 mb-0">Category Tables</h5>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb p-0 mb-0">
                                    <li class="breadcrumb-item"><a href="/"><i class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item active">Category
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic Tables start -->
                      <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Category List</h4>
                                    <a href="/admin_cat_add" class="float-right btn btn-primary btn-xs"> + Add New Cat</a>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                       
                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Cat Name</th>
                                                        <th>Status</th>
                                                        <th>Created At</th>
                                                        <th>Sub Cat List</th>
                                                       
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>#</td>
                                                        <td>Sumo</td>
                                                        <td>active</td>
                                                        <td>2011/04/25</td>
                                                        <td><a href="/admin_sub_cat_list" class="btn btn-info btn-xs">Sub Cat</a></td>
                                                        <td><a href="/admin_cat_edit" class="btn btn-warning btn-xs ">Edit</a></td>
                                                    </tr>
                                                   
                                                   
                                                   
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                         <th>#</th>
                                                        <th>Cat Name</th>
                                                        <th>Status</th>
                                                        <th>Created At</th>
                                                        <th>Sub Cat List</th>
                                                       
                                                        <th>Action</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
              
               
            </div>
        </div>
    </div>
    <!-- END: Content-->


   @endsection