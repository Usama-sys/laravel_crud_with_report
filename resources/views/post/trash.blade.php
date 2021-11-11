@extends('post/app')

@section('content')

    <section class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="card">
                        <div class="card-header">
                            Trashed
                            <a href="/"><button class="btn btn-primary mx-3">Back</button></a>
                            
                        </div>
                        <div class="card-body">
                            @if (Session::has('post_restore'))
                            <div class="alert alert-info" role="alert">
                                {{Session::get('post_restore') }}
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
                                                
                                                <a href="restore/{{ $post->id }}" class="btn btn-outline-warning btn-sm">
                                                     Restore</a>
                                                
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
