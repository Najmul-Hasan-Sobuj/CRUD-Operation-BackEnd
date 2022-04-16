@extends('layouts.master')
@section('content')
        <div class="card-body">
            @if(Session::has('msg'))
            <p class="alert alert-info">{{ Session('msg') }}</p>
            @endif
            <form id="storeForm" action="{{ route('candidate.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <input type="text" id="fname" name="fname" class="form-control" />
                            <label class="form-label" for="fname">First name</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <input type="text" id="lname" name="lname" class="form-control" />
                            <label class="form-label" for="lname">Last name</label>
                        </div>
                    </div>
                </div>
                <!-- Text input -->
                <div class="form-outline mb-4">
                    <input type="text" id="cname" name="cname" class="form-control" />
                    <label class="form-label" for="cname">Company name</label>
                </div>

                <!-- Text input -->
                <div class="form-outline mb-4">
                    <input type="text" id="address" name="address" class="form-control" />
                    <label class="form-label" for="address">Address</label>
                </div>
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="email" id="email" name="email" class="form-control" />
                    <label class="form-label" for="email">Email</label>
                </div>

                <!-- text input -->
                <div class="form-outline mb-4">
                    <input type="text" id="phone" name="phone" class="form-control" />
                    <label class="form-label" for="phone">Phone</label>
                </div>
                <div class="row">
                    <div class="col-lg-8 ">
                        <!-- file input -->
                        <div class="form-outline mb-4">
                            <input type="file" onchange="previewFile(this);" name="image"  class="form-control" id="image" />
                        </div>
                        <!-- Message input -->
                        <div class="form-outline mb-4">
                            <textarea class="form-control" id="description" name="description" rows="4"></textarea>
                            <label class="form-label" for="description">Additional information</label>
                        </div>
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-4">Place order</button>
                    </div>
                    <div class="col-lg-4 ">
                        <div class="mb-4">
                            <img id="previewImg" src="asset/image/view image.png" style="height: 250px; width: 100%;"
                                class="img-thumbnail" alt="view the image" />
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
