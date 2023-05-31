@extends('layouts.admin')

@section('content')
<a href="{{route('admin.projects.create')}}" class="btn btn-primary"> Crea nuovo post</a>

<table class="table">
    <thead>
        <tr>

            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Slug</th>
            <th scope="col">Url</th>
            <th scope="col">Descrizione</th>

        </tr>
    </thead>
    <tbody>

        @foreach($projects as $project)
            <tr>
                <td>{{$project->id}}</th>
                <td>{{$project->title}}</td>
                <td>{{$project->slug}}</td>
                <td>{{$project->url}}</td>
                <td>{{$project->description}}</td>
                <td><a href="{{route('admin.projects.show', $project->slug)}}" class="btn btn-secondary">Show</a></td>
                <td><a href="{{route('admin.projects.edit', $project->slug)}}" class="btn btn-secondary">Edit</a></td>
                <td>
                    <form action="{{route('admin.projects.destroy', $project->slug)}}"  method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">DELETE</button>
                    </form>
                </td>

            </tr>
        @endforeach


    </tbody>
</table>

@endsection