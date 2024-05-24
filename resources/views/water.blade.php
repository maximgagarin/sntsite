@extends('layout')
@section('content')
    <div class="water" >
<h5>График подачи воды</h5>
        {!! $waterText !!}
    </div>

    <style>
        table {
            width: 100%;
            margin-bottom: 20px;
            border: 1px solid #dddddd;
            border-collapse: collapse;
        }
        table th {
            font-weight: bold;
            padding: 5px;
            background: #efefef;
            border: 1px solid #dddddd;
        }
        table td {
            border: 1px solid #dddddd;
            padding: 5px;
        }
    </style>
@endsection
