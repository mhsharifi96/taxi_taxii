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
                                <thead class="bg-light">
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
                                    <td><small>{!!str_limit($post->title,12)!!}</small></td>
                                    <td><small>{{$post->user->name}}</small></td>
                                    <td><small>{{$post->category->name}}</small></td>
                                    {{--<td><small>Admin</small></td>--}}
                                    <td><small>
                                                <?php
                                                     $count=0;
                                                    foreach ($results as $result){

                                                        if($result->post_id == $post->id){
                                                            $count=$count+1;
                                                        }

                                                    }
                                                print($count);
                                                ?>
                                                {{--@foreach($results as $result)--}}
                                                {{--{{count($results)}}--}}
                                                {{--@endforeach--}}
                                                </small></td>
                                    <td><small>{{$post->created_at}}</small></td>
                                     <td><small>
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
                                             </small></td>
                                    <td>
                                        <a href="/posts/{{$post->id}}/edit"><i class="fa fa-pencil-square-o"></i></a>
                                        <a href="/posts/{{$post->id}}"><i style="color: #007bff" class="fa fa-eye"></i></a>
                                        {{--<a href="{{route('posts.destroy',['id'=>$post->id])}}"><i class="fa fa-trash"></i></a>--}}
                                        {{--<form action="{{route('posts.destroy',['id'=>$post->id])}}" method="post">--}}
                                            {{--{{method_field('delete')}}--}}
                                            {{--{{csrf_field()}}--}}
                                            {{--<div  class="btn-group btn-group-xs">--}}
                                                {{--<button type="submit"><i class="fa fa-trash"></i></button>--}}
                                                {{--<a class="delete_post" href="javascript:void(0);" id="{{$post->id}}">Delete</a>--}}
                                                {{--<a href="{{ route('posts.destroy', [$post->id]) }}" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure?')">Delete</a>--}}
                                            {{--</div>--}}
                                        {{--</form>--}}
                                        <form id="delete-form" method="POST" action="posts/{{$post->id}}">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}

                                            <a>

                                                <button style="background-color: white" type="submit" value="Delete user"><i  style="color: #007bff" class="fa fa-trash"></i></button>
                                            </a>
                                        </form>
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

<script>
    $('.post_user').click(function(){
        if( confirm('Are you sure?') )
        {
            var id = $(this).attr('id');
            // Make an ajax call to delete the record and pass the id to identify the record
        }
    });
</script>