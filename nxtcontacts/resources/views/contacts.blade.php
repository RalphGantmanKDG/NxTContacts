@extends('layouts.app')

@section("content")

<button class="btn_contact">Create new contact</button>
<br>
<input class="searchBar" type="text" placeholder="Search in contacts">

<section class="contactsContainer">
  <div class="card">
    <p class="name">Lady Gaga</p>
    <p class="email">ladygaga@gaga.com</p>
    <div class="card_button_container">
      <button class="btn_delete">Delete</button>
      <button class="btn_edit">Edit</button>
    </div>
  </div>
</section>

@endsection 