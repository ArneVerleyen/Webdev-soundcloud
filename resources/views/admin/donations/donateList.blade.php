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
            <th>Amount</th>
            <th>Currency</th>
            <th>Message</th>
            </tr>
        </thead>
        <tbody>
            @foreach($donations as $donation)
            <tr>
                <td>
                    {{$donation->amount}}
                </td>
                <td>
                    {{$donation->currency}}
                </td>
                <td>
                    {{$donation->message}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="col-12 pagination">{{$donations->links()}}</div>

</div>
@endsection
