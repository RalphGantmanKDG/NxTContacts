@extends('layouts.app')

@section("add")

    <?php
    echo 'contact edited you are redirected back to contacts page'
    ?>
    <?php
    header( "refresh:3;url=../contacts" );
    ?>
@endsection
