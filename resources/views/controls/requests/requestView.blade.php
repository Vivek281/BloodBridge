@extends('backend.layouts.master')
@section('title','Users')
@section('content')
<div class="container-fluid">
    <h2 style="color:#A5243D; font-family:helvetica;">Blood Requests</h2>
    <div class="table-responsive">
        <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col" style="text-align: center;">Request Id</th>
                        <th scope="col" style="text-align: center;">User ID</th>
                        <th scope="col" style="text-align: center;">Blood Group</th>
                        <th scope="col" style="text-align: center;">Units Requested</th>
                        <th scope="col" style="text-align: center;">Urgency Level</th>
                        <th scope="col" style="text-align: center;">Hospital Name</th>
                        <th scope="col" style="text-align: center;">Location</th>
                        <th scope="col" style="text-align: center;">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($request as $data)
                    <tr>
                        <th scope="row" style="text-align: center;">{{ $data->id}}</th>
                        <td style="text-align: center;">{{ $data->user_id}}</td>
                        <td style="text-align: center;">{{ $data->blood_group}}</td>
                        <td style="text-align: center;">{{ $data->units}}</td>
                        <td style="text-align: center;">{{ $data->urgency_level}}</td>
                        <td style="text-align: center;">{{ $data->hospital_name}}</td>
                        <td style="text-align: center;">{{ $data->location}}</td>
                        <td style="text-align: center;">{{ $data->status}}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="12" class="text-center">No Requests Found!</td>
                    </tr>
                @endforelse
                </tbody>
        </table>
    </div>
     {{$request->links()}}

</div>
    @endsection
