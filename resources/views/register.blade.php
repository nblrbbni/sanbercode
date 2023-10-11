@extends('layout.master')

@section('judul')
<b>Buat Account Baru!</b>
@endsection

@section('subjudul')
<b>Sign Up Form</b>
@endsection

@section('content')
<form action="/welcome" method="post">
    @csrf
    <label>First Name:</label><br><br>
    <input type="text" name="firstname"><br><br>

    <label>Last Name:</label><br><br>
    <input type="text" name="lastname"><br><br>

    <label>Gender:</label><br><br>
    <input type="radio" name="gender" value="Male">Male<br>
    <input type="radio" name="gender" value="Female">Female<br><br>

    <label>Nationality:</label><br><br>
    <select name="nationality">
        <option value="Indonesian">Indonesian</option>
        <option value="Singaporean">Singaporean</option>
        <option value="Malaysian">Malaysian</option>
        <option value="Australian">Australian</option>
    </select><br><br>

    <label>Language Spoken:</label><br><br>
    <input type="checkbox" name="language" value="Bahasa Indonesia">Bahasa Indonesia<br>
    <input type="checkbox" name="language" value="English">English<br>
    <input type="checkbox" name="language" value="Arabic">Arabic<br>
    <input type="checkbox" name="language" value="Other">Other<br><br>

    <label>Bio:</label><br><br>
    <textarea name="bio" id="" cols="30" rows="10"></textarea><br><br>
    <input type="submit" value="Welcome">
</form>
@endsection
