@extends('layout.main')


@section('main_content')
 


      <div class="row clearfix page_header">
      	<div class="col-md-6">
      		 <h2> Products </h2>
      	</div>
      	<div class="col-md-6 text-right">
      	<a class="btn btn-info"href="{{route('products.create')}}"><i class="fa fa-plus">
      	 New Product</i>
      	</a>	
      	</div>
      </div>
                     <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Product</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                         	
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                          <tr>
                                            <th>ID</th>
                                            <th>CATEGORY_ID</th>
                                            <th>TITLE</th>
                                            <th>DESCRIPTION</th>
                                            <th>COST PRICE</th>
                                            <th>PRICE</th>
                                            <th class="text-right">Actions </th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>CATEGORY</th>
                                            <th>TITLE</th>
                                            <th>DESCRIPTION</th>
                                            <th>COST PRICE</th>
                                            <th>PRICE</th>
                                            <th class="text-right">Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($products as  $product)
                                        <tr>
                                            <td>{{ $product->id}}</td>
                                            <td>{{ $product->category->title}}</td>
                                            <td>{{ $product->title}}</td>
                                            <td>{{ $product->description}}</td>
                                            <td>{{ $product->cost_price}}</td>
                                            <td>{{ $product->price}}</td>
                                            <td class="text-right">

                                           
	                                          

                                            <form method="POST" action="{{route('products.destroy' ,['product'=> $product->id])}}" >
                                            <a class="btn btn-primary btn-sm" href="{{route('products.show',['product'=>$product->id])}}">
                                             <i class="fa fa-eye">Show</i>
                                            </a>   
                                            <a class="btn btn-primary btn-sm" href="{{route('products.edit',['product'=>$product->id])}}">
                                             <i class="fa fa-edit">Edit</i>
                                            </a>                                                                                         	
                                             @csrf
                                             @method('DELETE')
                                             <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger btn-sm" >
                                             <i class="fa fa-trash"> </i>Delete
                                             </button> 	
                                            </form> 	                                         	
                                            </td>
                                       </tr>
                                       @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

@stop