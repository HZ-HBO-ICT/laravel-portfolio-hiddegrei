@extends('layouts.app')

@section('content')
<div class="profile">
   <div class="profile_first_row">
       <div class="profile_imgCon">
       <img  src="/svg/fcc.png" class="profile_imgCon_img" alt="">

       </div>
       <div class="profile_info">
           <div><h1>{{$user->username}}</h1></div>
           <div class="profile_info_elements">
               <div><strong>{{$user->posts->count()}}</strong>posts</div>
               <div><strong>150k</strong>followers</div>
               <div><strong>150</strong>following</div>
           </div>

           <div class="profile_info_elements_col">
               <div>{{$user->profile->title}}</div>
               <div>{{$user->profile->description}}</div>
               <div><a href="#">{{$user->profile->url}}</a></div>

           </div>

           <div class="profile_info_elements">
               <a href="/p/create">add new post</a>

            </div>
       </div>
       
   </div>

   <div class="row pt-5">
   @foreach($user->posts as $post)
       <div class="col-4 pb-4">
           <a href="/p/{{$post->id}}">
           <img src="/storage/{{$post->image}}" alt="" class="w-100">

           </a>
           
       </div>
       @endforeach
   </div>
</div>
@endsection
