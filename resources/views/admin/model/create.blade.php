@extends('layouts.adminApp') 
@section('title', 'Todo App')
@section('content')
<main class="app-content">
   <div class="app-title">
      <div>
         <h1><i class="fa fa-th-list"></i>  User List</h1>
      </div>
   </div>
   
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
                           <th>Email</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody align="center">
                        <?php
                           $count = 1; 
                           ?>
                        @foreach($models as $model)
                        <tr>
                           <td style="border-right: 1px solid black;">{{ $count++ }}</td>
                           <td>{{ $model->name }}</td>
                           <td>{{ $model->email }}</td>
                           <td>
                              <div class="btn-group">
                                <!--  <a class="edit" title="Edit" data-brandname="{{ $model->name }}" data-toggle="modal" data-target="#editmodel{{$model->id}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                 </a>&nbsp;&nbsp;&nbsp; -->
                                 <a href="{{ url('admin/model/destroy',$model->id) }}" onclick="return check_model_delete_info();"><i class="fa fa-trash-o"></i>
                                 </a>
                              </div>
                           </td>
                        </tr>
                        <!-- Start Edit Model in modal-->
                        <div class="modal fade" id="editmodel{{$model->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                           <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <h5 class="modal-title text-info" id="exampleModalCenterTitle">Edit Model</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                 </div>
                                 <form action="{{ route('admin.update.model') }}" method="POST" id="modelEditForm" name="modelEditForm">
                                    @csrf
                                    <input type="hidden" name="emodel_id" value="{{$model->id}}">
                                    <!--  -->
                                    <div class="modal-body">
                                       <div class="title">
                                          <b> Fields marked with <strong style="color:red">*</strong> are mandatory </b>
                                       </div>
                                       <div class="model-border"></div>
                                       <br>
                                       <div class="form-group row">
                                          <label class="control-label col-md-3"> Brand <strong style="color:red">*</strong></label>
                                          <div class="col-md-8">
                                             <select style="text-align: center" class="form-control" aria-invalid="false" name="brand_id" required="required">
                                             
                                             </select>
                                             <div class="form-control-feedback" id="modelMessage"> </div>
                                          </div>
                                       </div>
                                       <div class="form-group row">
                                          <label class="control-label col-md-3"> Model Name<strong style="color:red">*</strong></label>
                                          <div class="col-md-8">
                                             <input class="form-control" type="text" name="name" id="name" value="{{$model->name}}">
                                             <div class="form-control-feedback" id="modelMessage"> </div>
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
                        <!-- End Edit model -->
                        @endforeach
                     </tbody>
                  </table>
                  
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- End record of data -->
</main>
@endsection