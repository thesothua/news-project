@extends('admin.welcome')

@section('main-section')
    

<div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-10">
                  <h1 class="admin-heading">All Posts</h1>
                </div>
                <div class="col-md-2">
                    <a class="add-new" href="{{url('admin/add-post')}}">add post</a>
              </div>
              <div class="col-md-12">
                  <table class="content-table">
                      <thead>
                          <th>S.No.</th>
                          <th>Title</th>
                          <th>Category</th>
                          <th>Date</th>
                          <th>Author</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </thead>
                      <tbody>
                        @foreach ($allPost as $post)
                            
                        <tr>
                          <td class='id'>{{$post->post_id}}</td>
                              <td>{{$post->title}}</td>
                              <td>{{$post->category_name}}</td>
                              <td>{{$post->post_date}}</td>
                              <td>{{$post->username}}</td>
                              <td class='edit'><a href='{{url('/admin/update-post')}}'><i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a href='{{url('admin/delete-post')}}'><i class='fa fa-trash-o'></i></a></td>
                            </tr>
                            @endforeach
                          </tbody>
                    </table>
                  <ul class='pagination admin-pagination'>
                      <li class="active"><a>1</a></li>
                      <li><a>2</a></li>
                      <li><a>3</a></li>
                  </ul>
                </div>
          </div>
        </div>
  </div>
  @endsection

