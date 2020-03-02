@extends('layouts.app')

@section("add")

<div class="popUp_add_container">
  <p class="add_message">Adding a new contact</p>
  <input class="textArea" type="text" placeholder="Name">
  <input class="textArea" type="text" placeholder="Email"> 
  <button class="btn_create">Create</button>
</div>

@endsection 