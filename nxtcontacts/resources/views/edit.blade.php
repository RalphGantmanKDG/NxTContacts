@extends('layouts.app')

@section("edit")

<div class="popUp_edit_container">
  <p class="edit_message">You are editing this contact</p>
  <input class="textArea" type="text" value="Lady Gaga">
  <input class="textArea" type="text" value="ladygaga@gaga.com"> 
  <button class="btn_create">Save Changes</button>
</div>

@endsection 