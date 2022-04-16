@extends('layouts.master')
@section('content')
        <div class="card-body">
            <div class="table-responsive">
                <table class="table align-middle mb-0 bg-white table-hover table-responsive-lg">
                    <thead class="bg-light">
                        <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    @if ($candidates) 
                    <tbody>
                        @foreach ($candidates as $key => $candidate)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('uploads/candidate/thumb/' . $candidate->image) }}" alt=""
                                        style="width: 45px; height: 45px" class="rounded-circle" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">{{ $candidate->fname }} {{ $candidate->lname }}</p>
                                        <p class="text-muted mb-0">{{ $candidate->email }}</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">{{ $candidate->address }}</p>
                            </td>
                            <td>{{ $candidate->phone }}</td>
                            <td>
                                <a href="view.html" ><i class="fa-solid fa-eye"></i></a>
                                <a href="{{ route('candidate.edit', [$candidate->id]) }}" ><i class="fa-solid fa-pen-to-square"></i></a>
                                <a id="destroy" href="{{ route('candidate.destroy', [$candidate->id]) }}" >@csrf <i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    @endif
                </table>
                    <ul class="pagination justify-content-end mt-1">
                        {{ $candidates->links() }}
                    </ul>
            </div>
        </div>
    </div>
</div>
@endsection