
@extends('app')

@section('form')
    <div class="body-table">
    <a class="button-log-out" href="/">Log out</a>
    <div class="main-container" id="main_container">
        <table class="table-show">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th></th>
            </tr>
            @foreach($users as $u)
                <tr>
                    <td>{{$u->name}}</td>
                    <td>{{$u->email}}</td>
                    <td>{{$u->phone}}</td>
                    <td>{{$u->address}}</td>
                    <td>
                        <form action="{{ route('delete',['id'=>$u->id]) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="button-delete">⊖Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    </div>
@endsection

