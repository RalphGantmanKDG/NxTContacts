@extends('layouts.app')

@section("add")

    <?php
    echo 'contact added you are redirected back to contacts page'
    ?>
    <?php
    header( "refresh:3;url=../contacts" );
    ?>
@endsection
