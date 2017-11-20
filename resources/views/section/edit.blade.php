@extends('layouts.app')

@section('content')
    <section-edit :data="{{ $section->toJson() }}"></section-edit>
@endsection