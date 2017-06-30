@extends('layouts.app')

@section('title', 'Setup')

@section('sidebar')
    @parent
@endsection

@section('content')
    <form method="POST" action="/setup">
        <label>Backend</label>
        <select name="backend">
            <option value="zoneminder">ZoneMinder</option>
        </select>
        <label>Backend Location</label>
        <input type="text" name="backend_location" placeholder="eg http://192.168.0.20:8081" value="" />
        <button type="submit" class="btn">Install</button>
    </form>
@endsection