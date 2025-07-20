@extends('backend.layouts.master')
@section('title','Users')
@section('content')
<div class="container-fluid">
    <h2>All Users</h2>
    <a href="{{ route('users.create') }}" class="btn btn-success mb-2">Add New User</a>
    <div class="table-responsive">
        <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <!-- <th scope="col">Password</th> -->
                        <th scope="col">Phone</th>
                        <th scope="col">Blood Group</th>
                        <th scope="col">Location</th>
                        <th scope="col">Last Donated</th>
                        <th scope="col">Role</th>
                        <th scope="col">Is Available</th>
                        <th scope="col">User Type</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($user as $data)
                    <tr>
                        <th scope="row">{{ $data->id}}</th>
                        <td>{{ $data->name}}</td>
                        <td>{{ $data->email}}</td>
                        <!-- <td>{{ $data->password}}</td> -->
                        <td>{{ $data->phone}}</td>
                        <td>{{ $data->blood_group}}</td>
                        <td>{{ $data->location}}</td>
                        <td>{{ $data->last_donated}}</td>
                        <td>{{ $data->role}}</td>
                        <td>{{ $data->is_available}}</td>
                        <td>{{ $data->user_type}}</td>
                        <td>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('users.edit', $data->id) }}" class="btn btn-warning btn-sm me-2">Edit</a>
                                <form method="POST" action="{{ route('users.destroy', $data->id) }}" class="d-inline">
                                @csrf  @method('DELETE')
                                <button onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">Del</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="12" class="text-center">No Users Found!</td>
                    </tr>
                @endforelse
                </tbody>
        </table>
    </div>
     {{$user->links()}}

</div>
    @endsection
