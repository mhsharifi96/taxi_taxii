@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <a href="/posts/create" class="btn btn-primary">Create Post</a>
                    <h3>Your Blog Posts</h3>
                    @if(count($posts) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></td>
                                    <td>
                                        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>You have no posts</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div> --}}
{{-- new template --}}
<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
		    <div class="card margin-card">
		        <div class="card-body">
		            <div class="row">
		                <div class="col-md-2 border-right">
		                    <h4>پست ها</h4>
		                </div>
		                <div class="col-md-6 mr-auto" style="text-align:left">
                            <a href="posts/create">
                                <button  type="button"  class="btn btn-sm btn-primary ">درخواست جدید</button>
                            </a>

		                </div>
		                
		            </div>
		            <div class="row">
		                <div class="col-md-12">
		                    <table class="table table-hover ">
                                <thead class="bg-light ">
                                  <tr>
                                    {{-- <th>
                                      <div class="form-check-inline">
                                          <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" value="">
                                           </label>
                                       </div>
                                    </th>   --}}
                                    <th>موضوع</th>
                                    <th>نویسنده</th>
                                    <th>دسته بندی</th>
                                    {{--<th>تگ</th>--}}
                                    <th>تعداد کامت</th>
                                    <th>  تاریخ ایجاد</th>
                                    <th>وضعیت</th>
                                    <th>ویرایش</th>


                                  </tr>
                                </thead>
                                <tbody>


                                @foreach($posts as $post)
                                  <tr>
                                    {{-- <td>
                                        <div class="form-check-inline">
                                          <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" value="">
                                           </label>
                                       </div>
                                    </td>   --}}
                                    <td><a href="#"><small>{{$post->title}}</small></a></td>
                                    <td><small>{{$post->user->name}}</small></td>
                                    <td><small>{{$post->category->name}}</small></td>
                                    {{--<td><small>Admin</small></td>--}}
                                    <td><a href="#"><small>
                                                {{--@foreach($results as $result)--}}
                                                {{count($results)}}
                                                {{--@endforeach--}}
                                                </small></a></td>
                                    <td><small>{{$post->created_at}}</small></td>
                                     <td><a href="#"><small>
                                                 <?php
                                                 if($post->available=='1'){
                                                     print ('تایید');
                                                 }
                                                 elseif($post->available=='0'){
                                                     print('تایید نشده');
                                                 }
                                                 else{
                                                     print('در حال بررسی');
                                                 }
                                                 ?>
                                             </small></a></td>
                                    <td>
                                        <a href="#"><i class="fa fa-pencil-square-o"></i></a>
                                        <a href="#"><i class="fa fa-eye"></i></a>
                                        <a href="#"><i class="fa fa-trash"></i></a>
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
        <div class="col-md-2"></div>
	</div>
</div>
@endsection

