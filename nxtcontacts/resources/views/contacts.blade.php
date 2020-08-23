@extends('layouts.app')
@section("contacts")

    <a href="{{route("viewContactForm")}}" class="btn btn-success mb-3 btn-add">Add contacts</a>
    <br>
    {{--    <input class="searchBar" type="text" placeholder="Search in contacts">--}}

    <div class="col-md-4">
        <form action="/search" method="get">
            <div class="input-group">
                <input type="search" name="search" class="form-control">
                <span class="input-group-prepend">
                    <button type="submit" class="btn btn-primary">Search</button>
                </span>
            </div>
        </form>
    </div>
    <br>
    <section class="contactsContainer">
        @if(count($data) > 0 || !isset($search))
            @foreach($data as $i)
                <div class="card">
                    <p class="name">{{$i->name}}</p>
                    <p class="email">{{$i->email}}</p>
                    <div class="card_button_container">
                        <a href="{{route("viewEditContact", $i->id)}}" class="btn btn-success mb-2 btn-edit">Edit</a>
                        <a href="{{route("deletedContact", $i->id)}}" class="btn btn-success mb-2 btn-delete">Delete</a>
                    </div>
                </div>
            @endforeach
        @else
            <a href="{{route("getContacts")}}" class="btn btn-success mb-3 btn-return">Return to contacts</a>
            <p>No contacts found</p>
            <br>

        @endif
    </section>

@endsection
