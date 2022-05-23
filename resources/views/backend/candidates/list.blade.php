@extends('backend.dashboard')
@section('title', 'Candidate list')
@section('subtitle', 'Candidate list')
@section('content')

    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Candidate name</th>
                        <th>Email</th>
                        <th>Phone number</th>
                        <th>Profile image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
{{--                    <tfoot>--}}
{{--                    <tr>--}}
{{--                        <th>Name</th>--}}
{{--                        <th>Position</th>--}}
{{--                        <th>Office</th>--}}
{{--                        <th>Age</th>--}}
{{--                        <th>Start date</th>--}}
{{--                        <th>Salary</th>--}}
{{--                    </tr>--}}
{{--                    </tfoot>--}}
                    <tbody>
                    @foreach($candidates as $key=> $candidate)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{$candidate->user->name}}</td>
                        <td>{{$candidate->user->email}}</td>
                        <td>{{$candidate->user->phone}}</td>
                        <td><img src="{{$candidate->profile_image}}"></td>
                        <td>
{{--                            <a type="button" href="{{route('candidate.delete', $candidate->id)}}" onclick="return confirm('Are you sure?')" class="btn btn-primary">Edit</a>--}}

                            <a type="button" href="{{route('candidate.delete', $candidate->id)}}" onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
{{--                        <span aria-hidden="true"> {{ $candidates->links() }}</span>--}}
                    </ul>
                </nav>
            </div>
        </div>
    </div>

@endsection
