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
                        Редактирование поста
                        </h2>
           
            <form action="{{route('admin.post.update',$post->id)}}" method="POST" enctype="multipart/form-data" >
               @csrf
               @method('PATCH')
               @csrf
               <div class="form-group w-25">
                 <input type="text" name="title" class="form-control"  placeholder="название" value="{{$post->title}}"></div>
                 @error('title')
<div class="text-danger">{{$message}}</div>
                 @enderror

<div class="form-group ">
    <textarea value="{{$post->content}}" id="summernote" name="content">{{$post->content}}</textarea>
  
    @error('content')
<div class="text-danger">{{$message}}</div>
                 @enderror
                 <div class="form-group w-50">
                    <label for="exampleInputFile">Добавить файл</label>
                   <div class="w-25 mb-3">
                    <img src="{{asset('storage/'.$post->preview_image)}}" alt="preview_image"class="w-50">
                   </div>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="preview_image" >
                        <label class="custom-file-label" >Выберите файл</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Загрузка</span>
                      </div>
                    </div>
                    @error('preview_image')
<div class="text-danger">{{$message}}</div>
                 @enderror
                  </div>

                  <div class="form-group w-50 mb-6">
                        <label>Выберите категорию</label>
                        <select name="category_id"class="form-control">
                          @foreach($categories as $category)
                          <option value="{{$category->id}}" 
                          {{$category->id==$post->category_id ?'selected':''}}
                          >{{$category->title}}</option>
                          @endforeach
                          
                        </select>
                        <div class="form-group mt-3">
                  <label>Теги</label>
                  <select class="select2" multiple="multiple" name="tag_ids[]" data-placeholder="Выберите теги" style="width: 100%;">
                  @foreach($tags as $tag)
                    <option {{ is_array( $post->tags->pluck('id')->toArray()) && in_array($tag->id,$post->tags->pluck('id')->toArray()) ?'selected':''}} value="{{$tag->id}}">{{$tag->title}}</option>
                    @endforeach
                  </select>
                </div>
                      </div>


                  <div class="form-group w-50 ">
                    <label for="exampleInputFile">Добавить главное изображение</label>
                    <div class="w-25 mb-3">
                    <img src="{{url('storage/'.$post->main_image)}}" alt="main_image" class="w-50">
                   </div>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file"  class="custom-file-input" name="main_image" >
                        <label class="custom-file-label" >Выберите файл</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Загрузка</span>
                      </div>
                    </div>
                    @error('main_image')
<div class="text-danger">{{$message}}</div>
                 @enderror
                  </div>
</div>
<div class="form-group">
                 <input type="submit" class="btn btn-primary" value="Обновить">
</div>
            </form>
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