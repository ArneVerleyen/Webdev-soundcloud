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
            <th>Language</th>
            <th>Header</th>
            <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($homes as $home)
            <tr>
                <td>
                    {{$home->language}}
                </td>
                <td>
                    {{$home->header}}
                </td>
                <td>
                    <form method="POST" action="{{route('home.destroy', $home->id)}}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}

                        <div class="form-group">
                            <input type="submit" class="btn btn-danger delete" value="Delete">
                        </div>
                    </form>
                    <a class="edit btn btn-edit" href="{{route('home.edit', $home->id)}}">Edit</a>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <button class="orange-btn-blog">
        <a class="new-blog" href="{{route('home.new')}}">New home page text</a>
    </button>
</div>
@endsection

