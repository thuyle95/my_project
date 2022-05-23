@extends('backend.dashboard')
@section('title', 'Recruiter list')
@section('subtitle', 'Recruiter list')
@section('content')

    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Company name</th>
                        <th>Company address</th>
                        <th>Headoffice</th>
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
                    @foreach($recruiters as $key=> $recruiter)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{$recruiter->company_name}}</td>
                        <td>{{$recruiter->company_address}}</td>
                        <td>{{$recruiter->province->name}}</td>
                        <td>
                            <a type="button" href="{{route('recruiter.delete', $recruiter->id)}}" onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <span aria-hidden="true"> {{ $recruiters->links() }}</span>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

@endsection
