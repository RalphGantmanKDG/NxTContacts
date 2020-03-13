@extends('layouts.app')

@section("add")
    <a href="{{route("getContacts")}}" class="btn btn-success mb-3">Return</a>
    <div class="popUp_add_container">
        <p class="add_message">Adding a new contact</p>
        {{--  <input class="textArea" type="text" placeholder="Name">
          <input class="textArea" type="text" placeholder="Email"> --}} {{--//blade en laravel hebben hun eigen ding daarvoor--}}
        <form method="post" action="{{route('addContact')}}">
            @csrf
            <label for="name">Contact Name:</label>
            <input type="text" id="name" name="name">
            <label for="email">Email adress:</label>
            <input type="text" id="email" name="email">
            <button class="btn_create" type="submit">Create</button>
        </form>


    </div>

@endsection
