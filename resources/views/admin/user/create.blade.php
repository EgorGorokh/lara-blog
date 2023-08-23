@extends('admin.layouts.main')
@section('content')


<div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                     
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
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
                  
                    <div class="col-12">
                        <h2>
                        Добавление пользователя
                        </h2>
           
            <form action="{{route('admin.user.store')}}" method="POST" class="w-25">
               @csrf
               <div class="form-group">
                 <input type="text" name="name" class="form-control" value="{{old('name')}}"  placeholder="имя">
                
                 @error('name')
               
<div class="text-danger">{{$message}}</div>  
                 @enderror
                </div>


                 <div class="form-group">
                 <input type="text" name="email"  value="{{old('email')}}" class="form-control"  placeholder="email">
            
                 @error('email')
               
<div class="text-danger">{{$message}}</div>
                 @enderror
                 </div>

                 <div class="form-group">
                 <input type="text" name="password" class="form-control"  placeholder="пароль">
               
                 @error('password')
<div class="text-danger">{{$message}}</div>
                 @enderror
                 </div>


                 <div class="form-group w-50">
                        <label>Выберите роль</label>
                        <select name="role"class="form-control">
                          @foreach($roles as $id => $role)
                          <option value="{{$id}}" 
                          {{$id == old('role_id') ? 'selected' : '' }}
                          >{{$role}}</option>
                          @endforeach
                          
                        </select>
                        @error('role')
<div class="text-danger">   {{$message}}</div>
                 @enderror
</div>


                 
                 <input type="submit" class="btn btn-primary" value="Добавить">
            </form>
            </div>
            </div>
            </div>
        </section>
        <!-- /.content -->
    </div>


</div>

    @endsection