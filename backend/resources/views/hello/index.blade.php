@extends('layouts.helloapp')

@section('title', 'Index')

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
                    {{$item->ismyself}}
                </td>
            </tr>
        @endforeach
    </table>
@endsection

@section('footer')
    copyright 2017 tuyano.
@endsection
