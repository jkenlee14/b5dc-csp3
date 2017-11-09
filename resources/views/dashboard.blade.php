@extends('layouts.app')

@section('content')
    <div class="container-fluid postbody">
        <div class="col-md-10 col-md-offset-1">
            <h1>Dashboard</h1>
            <a href="posts\create" class="btn btn-success backbtn">Create Post</a>
            <table class="table table-striped table-bordered">
                <tr>
                    <th>Post Title</th>
                    <th></th>
                    <th></th>
                </tr>
                @if (count($posts)>0)
                    @foreach ($posts as $post)
                        <tr>
                            <td><a href="posts\{{$post->id}}">{{$post->title}}</a></td>
                            <td class="text-center"><a class="btn btn-default" href="/posts/{{$post->id}}/edit">Edit</a></td>
                            <td class="text-center">
                            <!-- Trigger the modal with a button -->
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#DeletePost{{$post->id}}">Delete</button>
                                <!-- Modal -->
                                <div id="DeletePost{{$post->id}}" class="modal fade" role="dialog">
                                  <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Delete Post</h4>
                                      </div>
                                      <div class="modal-body">
                                        <p>Are you sure you want to delete this post?</p>
                                      </div>
                                      <div class="modal-footer">
                                        {!!Form::open(['action'=>['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-left'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </td>
                        </tr>   
                    @endforeach
                @else
                    <p>You have no posts!</p>
                @endif
            </table>
        </div>
    </div>
@endsection
