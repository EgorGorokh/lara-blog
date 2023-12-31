@extends('personal.layouts.main')
@section('content')


<div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Комментарии</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Комментарии</li>
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
                    <div class="row-6">
                <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                   
                    <tr>
                      <th>ID</th>
                      <th>Название</th>
                      <th class="text-center"colspan="2">действия</th>
                   
                   
                    </tr>
                  </thead>
                  <tbody>

                  @foreach($comments as $comment)
                    <tr>
                      <td>{{$comment->id}}</td>
                      <td>{{$comment->message}}</td>
                      <th class="text-center"><a href="{{route('personal.comment.edit',$comment->id)}}"><i class="far fa-pencil-alt"></i></a></th>
                      <th class="text-center">
                        <form action="{{route('personal.comment.delete',$comment->id)}}" method="post">
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