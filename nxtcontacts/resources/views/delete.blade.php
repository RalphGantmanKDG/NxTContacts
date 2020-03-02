@extends('layouts.app')

@section("delete")

<div class="popUp_delete_container">
  <p class="delete_message">Are you sure you want to delete this contact?</p>
  <p class="name">Lady Gaga</p>
  <p class="email">ladygaga@gaga.com</p>
  <div class="popUp_delete_button_container">
    <button class="btn_delete">Delete</button>
    <button class="btn_nvrmnd">Nevermind</button>
  </div>
</div>

@endsection 