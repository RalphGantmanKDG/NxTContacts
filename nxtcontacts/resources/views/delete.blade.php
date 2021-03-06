@extends('layouts.app')

@section("delete")
    <a href="{{route("getContacts")}}" class="btn btn-success mb-3">Return</a>
    <div class="popUp_delete_container">
        <p class="delete_message">Are you sure you want to delete this contact?</p>
        <p class="name">{{$contact->name}}</p>
        <p class="email">{{$contact->email}}</p>
        <div class="popUp_delete_button_container">
            <a href="{{route("getContacts")}}" class="btn btn-success mb-3">Nevermind</a>
            <a href="{{route("deletedContact")}}" class="btn btn-success mb-3">Delete</a>
        </div>
    </div>

@endsection


