@extends('layout.masterlayout')
@section('content')
    <h3>Student Table</h3>
    @isset($data)
        <table class="table">
            <thead>
                <th class='table_col_left'>Serial No</th>
                <th class='table_col_left'>Name</th>
                <th class='table_col_left'>Email</th>
                <th class='table_col_left'>Age</th>
                <th>City</th>
                <th>View</th>
                <th>Edit</th>
                <th>Delete</th>
            </thead>
            <tbody>
                @foreach ($data as $key=>$value)
                    @if($loop->even) 
                         <tr style="background-color: #f7eea0;">
                            <td >{{$loop->iteration}}</td>   
                            <td class='table_col_left'>{{$value['name']}}</td>
                            <td class='table_col_left'>{{$value['email']}}</td>
                            <td class='table_col_left'>{{$value['age']}}</td>
                            <td> {{$value['city']}}</td>
                            <td><a href="{{route('student',['id'=>$value['st_id']])}}">View</a></td>
                            <td><a href="/editForm/{{$value['st_id']}}">Edit</a></td>
                            <td><a href="{{route('studentDelete',['id'=>$value['st_id']])}}">Delete</a></td>
                        </tr>                 
                    @else
                        <tr>
                            <td >{{$loop->iteration}}</td>   
                            <td class='table_col_left'>{{$value['name']}}</td>
                            <td class='table_col_left'>{{$value['email']}}</td>
                            <td class='table_col_left'>{{$value['age']}}</td>
                            <td> {{$value['city']}}</td>
                            <td><a href="{{route('student',['id'=>$value['st_id']])}}">View</a></td>
                            <td><a href="/editForm/{{$value['st_id']}}">Edit</a></td>
                            <td>
                                <a href="{{route('studentDelete',['id'=>$value['st_id']])}}">Delete</a>
                            </td>
                        </tr> 
                    @endif
                @endforeach
            </tbody>
        </table>
    @endisset                                                       
@endsection
