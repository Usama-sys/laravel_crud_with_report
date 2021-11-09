@extends('post/app')

@section('content')

    <section class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="card">
                        <div class="card-header">
                            All Post
                            <a href="/add_post"><button class="btn btn-primary mx-3">Add Post</button></a>
                            <a href="/pdf"><button class="btn btn-outline-secondary mx-3">Report</button></a>
                        </div>
                        <div class="card-body">
                            @if (Session::has('post_deleted'))
                                <div class="alert alert-danger" role="alert">
                                    {{Session::get('post_deleted') }}
                                </div>
                                
                            @endif
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Sr</th>
                                        <th>Title</th>
                                        <th>Discription</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $sr = 1;
                                    @endphp
                                    @foreach ($posts as $post)

                                        <tr>
                                            <td><?php echo $sr; ?></td>
                                            <td>{{ $post->title }}</td>
                                            <td>{{ $post->body }}</td>
                                            <td>
                                                <a href="/edit/{{ $post->id }}" class="btn btn-outline-success btn-sm">Update</a>
                                                <a href="/delete/{{ $post->id }}" class="btn btn-outline-danger btn-sm">
                                                     Delete</a>
                                                
                                            </td>
                                        </tr>
                                        @php
                                            $sr++;
                                        @endphp


                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    @endsection
