@extends('layouts.main')
@section('content')

<div class="w-30">

    <p class="intro">This app has been completed by <a href="https://www.linkedin.com/in/artem-pokhiliuk/">Artem Pokhiliuk</a> as a training project. It has been made in Laravel framework.</p>
    <p class="intro">The task according to which the project was completed can be found <a href="https://docs.google.com/document/u/0/d/1av0YcCLtlyKVVGsc9hP8lCZQ809UtarGlphPa2lPsNI/mobilebasic">here</a>.</p>
    <p class="intro">There are three users added to the app by default:</p>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Role</th>
        </tr>
        </thead>
        <tr>
            <td>Robb Jones</td>
            <td>a@a</td>
            <td>aa</td>
            <td>Admin</td>
        </tr>
        <tr>
            <td>John Persimonn</td>
            <td>s@s</td>
            <td>ss</td>
            <td>-</td>
        </tr>
        <tr>
            <td>Dasha Pesochkina</td>
            <td>d@d</td>
            <td>dd</td>
            <td>User</td>
        </tr>
    </table>
    <p class="intro">Admin has permissions to do everything, 'users' have permissions to write comments to articles, others can only view content of the app.</p>
    <p class="intro">You are free to register new users (they won't have any permissions).</p>
    
</div>
@endsection