@extends("backend.main")
@section("content")

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="/category/create">
                                <button class="btn btn-primary btn-sm">Create Category</button>
                            </a>
                        </div>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S.N</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)

                                <tr>
                                    <td>1</td>
                                    <td>{{$category->title}}</td>
                                    <td>{{$category->description}}</td>
                                    <td>
                                        <a href="/category/edit/{{$category->id}}">
                                            <button class="btn btn-primary btn-sm">Edit</button>
                                        </a>

                                        <a href="/category/delete/{{$category->id}}">
                                            <button class="btn btn-danger btn-sm">Delete</button>
                                        </a>

                                    </td>
                                </tr>

                                @endforeach

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>S.N</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection