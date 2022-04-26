@extends('layouts.master')
@section('content')
<div class="card-body">
        <!-- Section: Images -->
        <form id="galleryForm" action="#" method="post" enctype="multipart/form-data">
            @csrf
            <section class="">
                <div class="row mt-4">
                    @if ($candidates)
                    @foreach ($candidates as $item)
                        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                            <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                                <img src="{{ asset('uploads/candidate/' . $item->image) }}" class="w-100" />
                            </div>
                        </div>
                    @endforeach
                    @endif
                </div>
            </section>
        </form>
</div>
</div>
</div>
</div>
@endsection
