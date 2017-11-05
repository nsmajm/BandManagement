@extends('layout.master')
    @section('title')
        welcome {{$account->firstname}}
        @endsection


   @section('maincontent')
       <div class="alert alert-success">
           <h2 style="text-align: center">Welcome {{$account->firstname}}</h2>

       </div>
        <div class="row ">
            <div class="col-md-4">
                <li style="list-style: none"><img src="{{asset('images/NoProfile.jpg')}}" class="img-thumbnail"></li>
                <li style="list-style: none"> <h3>Description:</h3></li>
                <li style="list-style: none">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a </li>

            </div>
            <div  class="col-md-8">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <th>Name</th>
                        <td>{{$account->firstname}}{{' '.$account->lastname}}</td>

                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{$account->email}}</td>

                    </tr>
                    <tr>
                        <th>Date Of Birth</th>
                        <td>25-10-1994</td>

                    </tr>
                    <tr>
                        <th>Join Date</th>
                        <td>{{$account->joindate}}</td>

                    </tr>
                    </tbody>
                </table>
                <div class="alert alert-info">Your Recent Post</div>
            </div>
        </div>
       @endsection