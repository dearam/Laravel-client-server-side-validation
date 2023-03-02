@extends('app')

@section('edit')
<div class="edit-page" id="edit_page">
    <h3>Edit user</h3>
    <form class="form-edit" method="post" action="{{route('update',['id'=>$user->id])}}">
        @csrf
        <div class="input-field">
            <label>Name</label>
            <input name="name" value="{{$user->name}}" type="text"/>
        </div>
        <div class="input-field">
            <label>Email</label>
            <input name="email" value="{{$user->email}}" type="email"/>
        </div>
        <div class="input-field">
            <label>Phone</label>
            <input name="phone" value="{{$user->phone}}" type="number"/>
        </div>
        <div class="input-field">
            <label>Address</label>
            <input name="address" value="{{$user->address}}" type="text"/>
        </div>
        <button type="submit">update</button>
    </form>
</div>
@endsection
