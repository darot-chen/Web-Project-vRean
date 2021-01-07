@extends('layouts.header')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-3 col-md-5 col-sm-12"> 
            <div class="sticky-top py-1" style="top: 65px; background-color: #F0F2F5;">
                <div class="bg-dark text-white mt-2 rounded-pill ">
                <h5 class="text-center py-2"><b>Follower</b></h5>
                </div>
                <hr>
            </div>
            @if (count($follower)>0)
                @foreach ($follower as $item_follower)
                    @foreach ($user as $item_user)
                        @if ($item_user->idUser==$item_follower->idFollowing)
                            <div style="padding-top: 10px;">
                                <a href="#" class="profilefollowlist">
                                    <img src="img/hi.jpg" alt="" class="rounded-circle" style="width: 50px; height: 50px;">
                                    {{ $item_user->username }}
                                </a>
                            </div>
                        @endif
                    @endforeach
                @endforeach
            @else
                <h5>null</h5>
                <br><br><br>
                <h5>null</h5>
                <br><br><br>
                <h5>null</h5>
                <br><br><br>
                <h5>null</h5>
                <br><br><br>
                <h5>null</h5>
                <br><br><br>
                <h5>null</h5>
                <br><br><br>
                <h5>null</h5>
                <br><br><br>
                <h5>null</h5>
                <br><br><br>
                <h5>null</h5>

            @endif
        </div>

        <!-- <div class="followlistcol-md-2 col-md-2"></div> -->
        
        <div class="col-lg-3 col-md-5 col-sm-12 ">
            {{-- following --}}
            <div class="sticky-top py-1" style="top: 65px; background-color: #F0F2F5;">
                <div class="bg-dark text-white mt-2 rounded-pill ">
                <h5 class="text-center py-2"><b>Follower</b></h5>
                </div>
                <hr>
            </div>
            @if (count($following)>0)
                @foreach ($following as $item_following)
                    @foreach ($user as $item_user)
                        @if ($item_user->idUser==$item_following->idFollower)
                            <div style="padding-top: 10px;">
                                <a href="#" class="profilefollowlist">
                                    <img src="img/hi.jpg" alt="" class="rounded-circle" style="width: 50px; height: 50px;">
                                    {{ $item_user->username }}
                                </a>
                            </div>
                            <h5>null</h5>
                <br><br><br>
                <h5>null</h5>
                <br><br><br>
                <h5>null</h5>
                <br><br><br>
                <h5>null</h5>
                <br><br><br>
                <h5>null</h5>
                <br><br><br>
                <h5>null</h5>
                <br><br><br>
                <h5>null</h5>
                <br><br><br>
                <h5>null</h5>
                <br><br><br>
                <h5>null</h5>
                        @endif
                    @endforeach
                @endforeach
            @else
                <h5>null</h5>
                
            @endif
        </div>
    </div>
</div>
@endsection