@extends('layouts.app')


@foreach($companies as $company)
    {{$company->name}}

@endforeach