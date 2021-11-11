@extends('post/app')

@section('content')

    <section class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            Edit Post
                        </div>
                        <div class="card-body">
                            @if (Session::has('post_updated'))
                                <div class="alert alert-success" role="alert">
                                    {{ Session::get('post_updated') }}
                                </div>

                            @endif
                            {{-- action="{{ route('update', $post->id)}}" --}}
                            <form action="{{ url('edit') }}" method="post">
                                @csrf

                                <input type="hidden" name="id" value="{{ $post->id }}">
                                <div>
                                    <label for="title">Post title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Enter Title"
                                        value="{{ $post->title }}" required>
                                </div>
                                <div>
                                    <label for="title">Post Discription</label>
                                    <textarea rows="3" class="form-control" name="body" placeholder="Enter Discription "
                                        required>{{ $post->body }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-success mt-2">Update</button>
                                <a href="/" class="btn btn-primary mt-2">Back</a>


                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
