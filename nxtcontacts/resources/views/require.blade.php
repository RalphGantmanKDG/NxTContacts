@extends('layouts.app')

@section("add")

    <?php
    echo 'Please fill in all the fields'
    ?>
    <?php
    header( "refresh:3;url=/contacts/add" );
    ?>
@endsection
