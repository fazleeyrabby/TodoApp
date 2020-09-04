@extends('layouts.adminApp') @section('title', 'Todo App') @section('content')
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i>  Project List</h1>
        </div>
    </div>
    <!--Start Add Project modal -->
    <div class="modal fade" id="add-brand" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title text-info" id="exampleModalCenterTitle">Add Project</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">Project
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                {!! Form::open(['route' => 'brand.store','class'=>'form-horizontal brandValidation','id'=>'brandAddForm','name'=>'brandAddForm']) !!}
                <div class="modal-body">
                    <div class="title">
                        <b> Fields marked with <strong style="color:red">*</strong> are mandatory </b>
                    </div>
                    <div class="brand-item-border">
                    </div>
                    <br>
                    <div class="form-group row">
                        <label class="control-label col-md-3"> Project Name<strong style="color:red">*</strong></label>
                        <div class="col-md-8">
                            <input type="text" name="name" id="name" class="form-control ">
                            <div class="form-control-feedback" id="nameMessage"></div>
                        </div>
                    </div>

                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success btn-lg ">Add</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Add Brand modal -->
    <!-- record of data -->
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bbranded" id="sampleTable">
                            <thead align="center">
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Entry Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody align="center">
                                <?php
                                    $count = 1; 
                                 ?>
                                    @foreach($brands as $brand)
                                    <tr>
                                        <td>{{ $count++ }}</td>
                                        <td>{{ $brand->name }}</td>
                                        <td>
                                            {{ $brand->entry_date->format('M j, Y') }}
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <a class="edit" title="Edit" data-brandname="{{ $brand->name }}" data-toggle="modal" data-target="#editbrand{{$brand->id}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                </a>&nbsp;&nbsp;&nbsp;
                                                <a href="{{ url('admin/brand/destroy',$brand->id) }}" onclick="return check_brand_delete_info();"><i class="fa fa-trash-o"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Start Edit Project modal -->
                                    <div class="modal fade" id="editbrand{{$brand->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                            <div class="modal-content ">
                                                <div class="modal-header">
                                                    <h5 class="modal-title text-info" id="exampleModalCenterTitle">Edit Project</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                {!! Form::open(['route' => 'admin.update.brand','class'=>'form-horizontal brandEditValidation','id'=>'brandEditForm','name'=>'brandEditForm']) !!}
                                                <input type="hidden" name="ebrandid" value="{{$brand->id}}">
                                                <!--  -->
                                                <div class="modal-body">
                                                    <div class="title">
                                                        <b> Fields marked with <strong style="color:red">*</strong> are mandatory </b>
                                                    </div>
                                                    <div class="brand-item-border">
                                                    </div>
                                                    <div class="line"></div>
                                                    <br>
                                                    <div class="form-group row">
                                                        <label class="control-label col-md-3"> Project Name<strong style="color:red">*</strong></label>
                                                        <div class="form-control-feedback" id="nameMessage"></div>
                                                        <div class="col-md-8">
                                                            <input class="form-control" id="name" type="text" name="name" value="{{$brand->name}}">
                                                            <div class="form-control-feedback" id="nameMessage"></div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-success btn-lg ">Update</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Edit Project modal -->
                                    @endforeach
                            </tbody>
                        </table>
                        <div class="button">
                            <button title="Add BProjectand" data-toggle="modal" data-target="#add-brand" class="button btn-lg shadow mb-5 rounded" style="background-color: #f24c15;">Add Project </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>
@endsection