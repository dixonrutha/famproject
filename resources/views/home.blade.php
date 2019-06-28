@extends('layouts.app')

@section('content')
<div class="p-3">
   <div class="table-responsive-md" style="background-color:aliceblue">
    <table class="table table-bordered">
        <thead>
            <tr class="table-primary">
                <th>#</th>
                <th>name</th>
                <th>sex</th>
                <th>tarehe kupokea</th>
                <th>njia_kupokea</th>
                <th>Email</th>
                <th>simu</th>
                <th>eneo_analoishi</th>
                <th>muda alio ishi</th>
                <th>makazi</th>
                <th>mengine</th>
                <th>U.jina</th>
                <th>U.cheo</th>
                <th>U.tarehe</th>
                <th>Kiasi Cha Hela</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $key=>$d)
            <tr>
            <th scope="row">{{$key+1}}</th>
                <td>{{$d->name}}</td>
                <td>{{$d->sex}}</td>
                <td>{{$d->tarehe_kupokea}}</td>
                <td>{{$d->njia_kupokea}}</td>
                <td>{{$d->email}}</td>
                <td>{{$d->simu}}</td>
                <td>{{$d->eneo_analoishi}}</td>
                <td>{{$d->muda_kuishi}}</td>
                <td>{{$d->makazi}}</td>
                <td>{{$d->mengine}}</td>
              
                <td>{{$d->jina}}</td>
                <td>{{$d->cheo}}</td>
                <td>{{$d->tarehe}}</td>
                <td>{{$d->hela}}</td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection
