@extends('layouts.master')
@section('content')
<div class="card-body">
    <section class="h-100 gradient-custom-2">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-9 col-xl-7">
                    <div class="card">
                        <div class="rounded-top text-white d-flex flex-row"
                            style="background-color: #000; height:200px;">
                            <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                                <img src="{{ asset('uploads/candidate/thumb/' . $candidates->image) }}"
                                    alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2"
                                    style="width: 150px; z-index: 1">
                            </div>
                            <div class="ms-3" style="margin-top: 130px;">
                                <h5>{{ $candidates->fname }} {{ $candidates->lname }}</h5>
                                <p>{{ $candidates->address }}</p>
                            </div>
                        </div>
                        <div class="card-body p-4 text-black">
                            <div class="mb-5 mt-3">
                                <div class="p-4" style="background-color: #f8f9fa;">
                                    <form id="viewForm" action="{{ route('candidate.show', [$candidates->id]) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <!-- Text input -->
                                        <div class="form-outline mb-4">
                                            <input type="text" id="form6Example3" class="form-control" value="{{ $candidates->cname }}" disabled />
                                            <label class="form-label" for="form6Example3">Company
                                                name</label>
                                        </div>
                                        <!-- Email input -->
                                        <div class="form-outline mb-4">
                                            <input type="email" id="form6Example5" class="form-control" value="{{ $candidates->email }}"disabled />
                                            <label class="form-label" for="form6Example5">Email</label>
                                        </div>

                                        <!-- text input -->
                                        <div class="form-outline mb-4">
                                            <input type="text" id="form6Example6" class="form-control" value="{{ $candidates->phone }}"disabled />
                                            <label class="form-label" for="form6Example6">Phone</label>
                                        </div>
                                        <!-- Message input -->
                                        <div class="form-outline mb-4">
                                            <textarea class="form-control" id="form6Example7" rows="4"
                                                disabled>{{ $candidates->description }}</textarea>
                                            <label class="form-label" for="form6Example7">Additional
                                                information</label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</div>
</div>
</div>
</div>
@endsection
