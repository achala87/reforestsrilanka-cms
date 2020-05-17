<!-- resources/views/blog_post/index.blade.php -->

@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')

        <!-- New Blog Post Form -->
        <form action="{{ url('blog_post') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Blog Post Name -->
            <div class="form-group">
                <label for="blog-post-name" class="col-sm-3 control-label">Create Blog Post</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">
                </div>
            </div>

            <!-- Add Blog Post Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Post
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- TODO: Current Tasks -->
        <!-- Current Tasks -->
        @if (count($blog_posts ?? '') > 0)
            <div class="panel panel-default">
                <div class="panel-heading">
                    Current Blog Posts
                </div>

                <div class="panel-body">
                    <table class="table table-striped task-table">

                        <!-- Table Headings -->
                        <thead>
                            <th>Blog Posts</th>
                            <th>&nbsp;</th>
                        </thead>

                        <!-- Table Body -->
                        <tbody>
                            @foreach ($blog_posts ?? '' as $blog_post)
                                <tr>
                                    <!-- Task Name -->
                                    <td class="table-text">
                                        <div>{{ $blog_post->post_title }}</div>
                                    </td>

                                    <td>
                                        <!-- TODO: Delete Button -->
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif

@endsection