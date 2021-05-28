@extends('layout.main')


@section('main_content')
 


      <div class="row clearfix page_header">
        <div class="col-md-4">
          <a class="btn btn-primary"href="{{route('users.index')}}"><i class="fa fa-arrow-left aria-hidden="true">
         Back </i></a>
        </div>
      	<div class="col-md-8 text-right">
      	<a class="btn btn-info"href="{{url('users/create')}}"><i class="fa fa-plus">New Sale</i></a> 
        <a class="btn btn-info"href="{{url('users/create')}}"><i class="fa fa-plus"> New Purchase </i></a>  
        <a class="btn btn-info"href="{{url('users/create')}}"><i class="fa fa-plus"> New Payment </i></a> 
        <a class="btn btn-info"href="{{url('users/create')}}"><i class="fa fa-plus"> New Receipt </i></a>	
      	</div>
      </div>
                     <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">{{$user->name}}</h6>
                        </div>
                        <div class="card-body">

                         <div class="row clearfix justify-content-md-center">
                           <div class="col-md-8">
                          <table class="table table-borderless table-striped">
                        <tr>
                          <th class="text-right">Group : </th>
                          <td>{{$user->group->title}}</td> 
                        </tr>
                          <tr>
                          <th class="text-right">Name : </th>
                          <td>{{$user->name}}</td> 
                        </tr>     
                          <tr>
                          <th class="text-right">Email : </th>
                          <td>{{$user->email}}</td> 
                        </tr>
                        </tr>     
                          <tr>
                          <th class="text-right">Phone : </th>
                          <td>{{$user->phone}}</td> 
                        </tr>
                        </tr>     
                          <tr>
                          <th class="text-right">Address : </th>
                          <td>{{$user->address}}</td> 
                        </tr>
                        </table>
                           </div>
                         </div> 

                        </div>
       </div>

@stop