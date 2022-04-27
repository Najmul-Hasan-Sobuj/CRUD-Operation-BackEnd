@extends('layouts.master')
@section('content')
        <div class="card-body">
            <form id="updateForm" action="{{ route('candidate.update', [$candidates->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <input type="text" id="fname" name="fname" value="{{ $candidates->fname }}" class="form-control" />
                            <label class="form-label" for="fname">First name</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <input type="text" id="lname" name="lname" value="{{ $candidates->lname }}" class="form-control" />
                            <label class="form-label" for="lname">Last name</label>
                        </div>
                    </div>
                </div>
                <!-- Text input -->
                <div class="form-outline mb-4">
                    <input type="text" id="cname" name="cname" value="{{ $candidates->cname }}" class="form-control" />
                    <label class="form-label" for="cname">Company name</label>
                </div>

                <!-- Text input -->
                <div class="form-outline mb-4">
                    <input type="text" id="address" name="address" value="{{ $candidates->address }}" class="form-control" />
                    <label class="form-label" for="address">Address</label>
                </div>
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="email" id="email" name="email" value="{{ $candidates->email }}" class="form-control" />
                    <label class="form-label" for="email">Email</label>
                </div>

                <!-- text input -->
                <div class="form-outline mb-4">
                    <input type="text" id="phone" name="phone" value="{{ $candidates->phone }}" class="form-control" />
                    <label class="form-label" for="phone">Phone</label>
                </div>
                <div class="row">
                    <div class="col-lg-8 ">
                        <!-- file input -->
                        <div class="form-outline mb-4">
                            <input type="file" name="image" onchange="previewFile(this);" class="form-control"
                                id="customFile" />
                        </div>
                        <!-- Message input -->
                        <div class="form-outline mb-4">
                            <textarea class="form-control" id="description" name="description"
                                rows="4">{{ $candidates->description }}</textarea>
                            <label class="form-label" for="description">Additional information</label>
                        </div>
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-4">Update</button>
                    </div>
                    <div class="col-lg-4 ">
                        <div class="mb-4">
                            <img id="previewImg" src="{{ asset('uploads/candidate/' . $candidates->image) }}"
                                style="height: 250px; width: 100%;" class="img-thumbnail"
                                alt="view the image" />
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
