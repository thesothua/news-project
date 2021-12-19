@extends('admin.welcome')
@section('main-section')
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading">Add User</h1>
              </div>
              {{-- @php
                  echo "<pre>";
                    print_r($errors->all());
              @endphp --}}
              <div class="col-md-offset-3 col-md-6">
                  <!-- Form Start -->

                  <form  action="{{'/admin/add-user'}}" method ="POST" autocomplete="off">
                    @csrf
                      <div class="form-group">
                          <label>First Name</label>
                          <input type="text" name="fname" class="form-control" value="{{old('fname')}}" placeholder="First Name" required>
                          <span class="text-danger">
                              @error('fname')
                              {{$message}}
                                  
                              @enderror
                          </span>
                      </div>
                          <div class="form-group">
                          <label>Last Name</label>
                          <input type="text" name="lname" class="form-control"  value="{{old('lname')}}" placeholder="Last Name" required>
                          <span class="text-danger">
                              @error('lname')
                              {{$message}}
                                  
                              @enderror
                          </span>
                      </div>
                      <div class="form-group">
                          <label>User Name</label>
                          <input type="text" name="user" class="form-control" value="{{old('user')}}" placeholder="Username" required>
                         <span class="text-danger">
                            @error('user')
                            {{$message}}
                                
                            @enderror
                         </span>
                      </div>
                      <div class="form-group">
                          <label>Email Address</label>
                          <input type="email" name="email" class="form-control" placeholder="Email"  value="{{old('email')}}" required>
                          <span class="text-danger">
                            @error('email')
                            {{$message}}
                                
                            @enderror
                         </span>
                      </div>

                      <div class="form-group">
                          <label>Password</label>
                          <input type="password" name="password" class="form-control" placeholder="Password" required>
                          <span class="text-danger">
                            @error('password')
                            {{$message}}
                                
                            @enderror
                         </span>
                      </div>
                      <div class="form-group">
                          <label>User Role</label>
                          <select class="form-control" name="role" >
                              <option value="0">Normal User</option>
                              <option value="1">Admin</option>
                          </select>

                      </div>
                      <input type="submit"  name="save" class="btn btn-primary" value="Save" required />
                  </form>
                   <!-- Form End-->
               </div>
           </div>
       </div>
   </div>
   @endsection

