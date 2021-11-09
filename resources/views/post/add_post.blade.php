@extends('post/app')

@section('content')

    <section class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            Add post
                        </div>
                        <div class="card-body">
                            @if (Session::has('post_created'))
                                <div class="alert alert-success" role="alert">
                                    {{Session::get('post_created') }}
                                </div>
                                
                            @endif
                            <form action="{{ route('insert') }}" method="post">
                                @csrf
                                <div>
                                    <label for="title">Post title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Enter Title" required>
                                </div>
                                <div>
                                    <label for="title">Post Discription</label>
                                    <textarea rows="3" class="form-control" name="body"
                                        placeholder="Enter Discription " required></textarea>
                                </div>
                                <button type="submit" class="btn btn-success mt-2">Add Post</button>
                                <a href="/" class="btn btn-primary mt-2">Back</a>
                                

                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @endsection
