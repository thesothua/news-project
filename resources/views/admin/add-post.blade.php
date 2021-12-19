@extends('admin.welcome')
@section('main-section')

    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="admin-heading">Add New Post</h1>
                </div>
                <div class="col-md-offset-3 col-md-6">
                    <!-- Form -->
                    <form action="{{ url('admin/add-post') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                    
                      <x-Forms type="text" name="post_title" label="Title"/>
                      <x-Forms  type="textarea" name="postdesc" label="Description"/>
                      {{-- <x-Forms/>
                      <x-Forms/> --}}
                         {{-- <div class="form-group">
                            <label for="exampleInputPassword1"> Description</label>
                            <textarea name="postdesc" class="form-control" rows="5" required></textarea>
                            <span class="text-danger">
                                @error('postdesc')
                                    {{ $message }}

                                @enderror
                            </span>
                        </div> --}}
                        <div class="form-group">
                            <label for="exampleInputPassword1">Category</label>
                            <select name="category" class="form-control">
                                <option value="false" disabled selected> Select Category</option>
                             @foreach ($CategoryName as $item)
                             <option value="{{$item->category_id}}">{{$item->category_name}}</option>
                                 
                             @endforeach
                        
                            </select>
                            <span class="text-danger">
                                @error('category')
                                    {{ $message }}

                                @enderror
                            </span>
                        </div>
                        {{-- <div class="form-group">
                            <label for="exampleInputPassword1">Post image</label>
                            <input type="file" name="fileToUpload" required>
                            <span class="text-danger">
                                @error('fileToUpload')
                                    {{ $message }}

                                @enderror
                            </span>
                        </div>  --}}
                        <x-Forms  type="file" name="fileToUpload" label="Post image"/>
                        <input type="submit" name="submit" class="btn btn-primary" value="Save" required />
                    </form>
                    <!--/Form -->
                </div>
            </div>
        </div>
    </div>

@endsection
