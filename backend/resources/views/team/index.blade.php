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
                Team
            </th>
            <th>
                Event
            </th>
        </tr>
        @foreach($hasItems as $item)
            <tr>
                <td>
                    {{$item->getData()}}
                </td>
                <td>
                    <table width="100%">
                        @foreach($item->events as $obj)
                            <tr>
                                <td>
                                    {{$obj->getData()}}
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </td>
            </tr>
        @endforeach
    </table>
    <div style="margin:10px;">

    </div>
    <table>
        <tr>
            <th>
                Team
            </th>
        </tr>
        @foreach($noItems as $item)
            <tr>
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
