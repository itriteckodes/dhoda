@extends('admin.layout.index')

@section('title')
    Website Information
@endsection
@section('styles')
    <script src="{{ asset('admin/global_assets/js/plugins/editors/summernote/summernote.min.js') }}"></script>
    <script src="{{ asset('admin/global_assets/js/demo_pages/editor_summernote.js') }}"></script>
@endsection
@section('content')
    @if (App\Models\Information::count() == '0')
        <div class="row">
            <div class="col-md-12">
                <!-- Basic layout-->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Add New Information/h5>
                            <div class="header-elements">
                                <div class="list-icons">
                                    <a class="list-icons-item" data-action="collapse"></a>
                                    <a class="list-icons-item" data-action="remove"></a>
                                </div>
                            </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-8 col-12 mx-auto">
                                <form action="{{ route('admin.information.store') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Enter Phone Number</label>
                                        <input type="text" name="phone" placeholder="Enter Phone Number"
                                            class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Upload Logo</label>
                                        <input type="file" name="image" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Email Address</label>
                                        <input type="email" name="email" placeholder="Enter Email Address"
                                            class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Enter About Us Information</label>
                                        <textarea name="about" id="" cols="30" rows="2"
                                            class="form-control summernote"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Address</label>
                                        <input type="text" name="address" placeholder="Enter Address" class="form-control"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Home Meta Description</label>
                                        <textarea name="hdescription" id="" cols="30" rows="2"
                                            class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Blog Category Meta Description</label>
                                        <textarea name="bcdescription" id="" cols="30" rows="2"
                                            class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Contact Us Meta Description</label>
                                        <textarea name="cdescription" id="" cols="30" rows="2"
                                            class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Enter About Us Meta Description</label>
                                        <textarea name="adescription" id="" cols="30" rows="2"
                                            class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Privacy Policy </label>
                                        <textarea name="pdescription" id="" cols="30" rows="2"
                                            class="form-control summernote"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Facebook Link</label>
                                        <input type="text" name="fb" placeholder="Enter Facebook Link" class="form-control"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Instagram Link</label>
                                        <input type="text" name="insta" placeholder="Enter Instagram Link"
                                            class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Twitter Link</label>
                                        <input type="text" name="twitter" placeholder="Enter Twitter Link"
                                            class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Enter Pinterest Link</label>
                                        <input type="text" name="pt" placeholder="Enter Pinterest Link" class="form-control"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="txt" class="mt-4 btn btn-primary">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @else
        @foreach (App\Models\Information::all()->take(1) as $information)
            <div class="row">
                <div class="col-md-12">
                    <!-- Basic layout-->
                    <div class="card">

                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-8 col-12 mx-auto">
                                    <form action="{{ route('admin.information.update', $information->id) }}" method="post"
                                        enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf
                                        <div class="form-group">
                                            <label>Enter Phone Number</label>
                                            <input type="text" name="phone" placeholder="Enter Phone Number"
                                                value="{{ $information->phone }}" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Upload Logo <a href="{{ asset($information->image) }}"><i
                                                        class="fa fa-eye"></i></a></label>
                                            <input type="file" name="image" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Enter Email Address</label>
                                            <input type="email" name="email" placeholder="Enter Email Address"
                                                value="{{ $information->email }}" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Enter About Us Information</label>
                                            <textarea name="about" id="" cols="30" rows="2"
                                                class="form-control summernote">{{ $information->about }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Enter Address</label>
                                            <input type="text" name="address" placeholder="Enter Address"
                                                value="{{ $information->address }}" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Enter Privacy Policy Content</label>
                                            <textarea name="pdescription" id="" cols="30" rows="2"
                                                class="form-control summernote">{{ $information->pdescription }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Enter Facebook Link</label>
                                            <input type="text" name="fb" placeholder="Enter Facebook Link"
                                                class="form-control" value="{{ $information->fb }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Enter Instagram Link</label>
                                            <input type="text" name="insta" value="{{ $information->insta }}"
                                                placeholder="Enter Instagram Link" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Enter Twitter Link</label>
                                            <input type="text" name="twitter" value="{{ $information->twitter }}"
                                                placeholder="Enter Twitter Link" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Enter Linkedin Link</label>
                                            <input type="text" name="pt" value="{{ $information->pt }}"
                                                placeholder="Enter Pinterest Link" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" value="Update" name="txt" class="mt-4 btn btn-primary">
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
        @endforeach
    @endif
@endsection
