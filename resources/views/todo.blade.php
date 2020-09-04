@extends('layouts.adminApp')
@section('title', 'Todo App') 
@section('content')
<main class="app-content">
   <div class="app-title">
      <div>
         <h1><i class="fa fa-th-list"></i> To do List</h1>
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
                           <th>User Name</th>
                           <th>Name</th>
                           <th>Description</th>
                           <th>Entry Date</th>
                           <th>Status</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody align="center">
                        @foreach($items as $key => $item)
                        <tr>
                           <td>{{ ++$key }}</td>
                           <td>{{ $item->userName }}</td>
                           <td>{{ $item->name }}</td>
                           <td>{{ $item->description }}</td>
                           <td>{{ date('M j, Y', strtotime($item->entry_date)) }}</td>
                           <td>
                              @if($item->status=='')
                              Incomplete
                              @else
                              <del>complete</del>
                              @endif
                           </td>
                           <td>
                              @if($item->status=='')
                              <a class="btn btn-success" href="{{ route('todo.complete',$item->id) }}" title="Complete">
                              <i class="fa fa-arrow-circle-down" style="font-size:36px"></i>
                              @else
                              <a class="btn btn-success" href="{{ route('todo.incomplete',$item->id) }}" title="Incomplete">
                              <i class="fa fa-arrow-circle-up" style="font-size:36px"></i>
                              @endif
                           </td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</main>
@endsection