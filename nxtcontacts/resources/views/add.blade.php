@extends('layouts.app')

@section("add")
    <a href="{{route("getContacts")}}" class="btn btn-success mb-3">Return</a>
    <div class="popUp_add_container">
        <p class="add_message">Adding a new contact</p>
        {{--  <input class="textArea" type="text" placeholder="Name">
          <input class="textArea" type="text" placeholder="Email"> --}} {{--//blade en laravel hebben hun eigen ding daarvoor--}}
        <form method="post" action="{{route('addContact')}}">
            @csrf
            <br>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name">
            <br><br>
            <label for="email">Email:   </label>
            <input type="text" id="email" name="email">
            <br>

            <button class="btn_create" type="submit">Add contact</button>
        </form>


    </div>

@endsection
