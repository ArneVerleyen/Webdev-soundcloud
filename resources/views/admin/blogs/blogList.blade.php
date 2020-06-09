@extends('admin.admin_layout')
<style>
    .new-blog{
        text-decoration: none;
        color: whitesmoke;
    }
    .orange-btn-blog{
        background-color: orange;

        border: none;
        height: 60px;
        width: 200px;
        text-align: center;
        margin: 50px 35vw;
    }

</style>
@section('admin_content')
<div class="margin-for-sidebar">
    <table>
        <thead>
            <th>Title</th>
            <th>Artist</th>
            <th>Created</th>
            <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($albums as $album)
            <tr>
                <td>
                    {{$album->title}}
                </td>
                <td>
                    {{$album->artist}}
                </td>
                <td>
                    {{$album->created_at}}
                </td>
                <td>
                    <form method="POST" action="{{route('blogs.destroy', $album->id)}}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}

                        <div class="form-group">
                            <input type="submit" class="btn btn-danger delete" value="Delete">
                        </div>
                    </form>
                    <a class="edit btn btn-edit" href="{{route('blogs.edit', $album->id)}}">Edit</a>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="col-12 pagination">{{$albums->links()}}</div>
    <button class="orange-btn-blog">
        <a class="new-blog" href="{{ route('blogs.new') }}">NEW BLOG</a>
    </button>
</div>
@endsection
