@extends('admin.admin_layout')
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
                    deletenenal
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="col-12 pagination">{{$albums->links()}}</div>
</div>
@endsection
