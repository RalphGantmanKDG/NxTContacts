@extends('layouts.app')

@section("content")
    <a href="{{route("viewContactForm")}}" class="btn btn-success mb-3">Add contacts</a>

    <input class="searchBar" type="text" placeholder="Search in contacts">


    <section class="contactsContainer">
        @foreach($data as $i)
            <div class="card">
                <p class="name">{{$i->name}}</p>
                <p class="email">{{$i->email}}</p>
                <div class="card_button_container">
                    <a href="{{route("viewEditContact", $i->id)}}" class="btn btn-success mb-2">Edit</a>
                    <a href="{{route("deleteContact", $i->id)}}" class="btn btn-success mb-2">Delete</a>
                </div>
            </div>
        @endforeach
    </section>

@endsection
