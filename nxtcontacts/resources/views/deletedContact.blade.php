@extends('layouts.app')

@section("add")

    <?php
    echo 'contact deleted you are redirected back to contacts page'
    ?>
    <?php
    header( "refresh:3;url=../" );
    ?>
@endsection
