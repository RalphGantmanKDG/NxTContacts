@extends('layouts.app')

@section("edit")
    <a href="{{route("getContacts")}}" class="btn btn-success mb-3">Return</a>
<div class="popUp_edit_container">
  <p class="edit_message">You are editing this contact</p>
    <form method="put" action="{{route('editContact', $contact->id)}}">
        @csrf
        <label for="name">Contact Name:</label>
        <input class="textArea" type="text" value="{{$contact->name}}" >
        <label for="email">Email adress:</label>
        <input class="textArea" type="text" value="{{$contact->email}}">
        <a href="{{route("editedContact")}}" class="btn btn-success mb-3">Edit</a>
    </form>

</div>

@endsection
