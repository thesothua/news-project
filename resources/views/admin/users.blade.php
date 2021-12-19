@extends('admin.welcome')
@section('main-section')
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <h1 class="admin-heading">All Users</h1>
                </div>
                <div class="col-md-2">
                    <a class="add-new" href="{{ url('/admin/add-user') }}">add user</a>
                </div>
                <div class="col-md-12">
                    <table class="content-table">
                        <thead>
                            <th>S.No.</th>
                            <th>Full Name</th>
                            <th>User Name</th>
                            <th>Role</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>
                            @foreach ($Users as $user)

                                <tr>
                                    <td class='id'>{{ $user->user_id }}</td>
                                    <td>{{ $user->fname }} {{ $user->lname }}</td>
                                    <td>{{ $user->username }}</td>
                                    {{-- <td>{{$user->role}}</td> --}}
                                    @if ($user->role == 1)

                                        <td>{{ 'Admin' }}</td>

                                    @else

                                        <td>{{ 'User' }}</td>
                                    @endif
                                    <td class='edit'><a href='update-user.php'><i class='fa fa-edit'></i></a></td>
                                    <td class='delete'><a href='delete-user.php'><i class='fa fa-trash-o'></i></a></td>
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
