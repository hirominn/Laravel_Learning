@extends('layouts.helloapp')

@section('title', 'Team.index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <table>
        <tr>
            <th>
                id
            </th>
            <th>
                teamid
            </th>
            <th>
                teamname
            </th>
            <th>
                ismyself
            </th>
            <th>
                color
            </th>
            <th>
                data
            </th>
        </tr>
        @foreach($items as $item)
            <tr>
                <td>
                    {{$item->id}}
                </td>
                <td>
                    {{$item->teamid}}
                </td>
                <td>
                    {{$item->teamname}}
                </td>
                <td>
                    {{$item->ismyself}}
                </td>
                <td>
                    {{$item->color}}
                </td>
                <td>
                    {{$item->getData()}}
                </td>
            </tr>
        @endforeach
    </table>
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection
