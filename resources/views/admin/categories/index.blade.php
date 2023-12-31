@extends('admin.layouts.main')
@section('content')


<div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Категории</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.category.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active">Категории</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-2 mb-3" >
                    <a href="{{route('admin.category.create')}}" class="btn btn-block btn-primary">добавить</a>
                    </div>
                    <div class="col-12">
             
             <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                   
                    <tr>
                      <th>ID</th>
                      <th>Название</th>
                      <th class="text-center"colspan="3">действия</th>
                   
                   
                    </tr>
                  </thead>
                  <tbody>

                  @foreach($categories as $category)
                    <tr>
                      <td>{{$category->id}}</td>
                      <td>{{$category->title}}</td>
                      <th class="text-center"><a href="{{route('admin.category.show',$category->id)}}"><i class="far fa-eye"></i></a></th>
                      <th class="text-center"><a href="{{route('admin.category.edit',$category->id)}}"><i class="far fa-pencil-alt"></i></a></th>
                      <th class="text-center">
                        <form action="{{route('admin.category.delete',$category->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="border-0 bg-transparent">
                            <i class="far fa-trash text-danger" role="button"></i>
                            </button>
                 
                        </form>
                    </th>
                 
                    </tr>
                    
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
             </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
                <!-- Main row -->
              
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>


</div>

    @endsection