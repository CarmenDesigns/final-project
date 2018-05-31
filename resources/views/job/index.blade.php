@extends('layouts.app')

<form method="post" action="/job">
    @csrf
    Job name:<br>
    <input type="text" name="name" id="name" placeholder="name"><br>
    Genre:<br>
    <input type="text" name="location" id="location" placeholder="location"><br><br>
    <input type="submit" value="Add">
</form>