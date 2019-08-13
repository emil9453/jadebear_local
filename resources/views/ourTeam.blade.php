@extends('layouts.app')
@section('title', 'Наша команда')
@section('background', 'white-back')
@section('menu-type', 'black')
@section('content')
    <script>
        let prevTeamMember = () =>
        {
            let teamMemberInfo = $('.teamMemberInfo:visible');
            let counter = teamMemberInfo.data().counter;
            if(counter!==0)
            {
                let imgSrc = teamMemberInfo.prev().data().imgsrc;
                teamMemberInfo.fadeOut( "200", function()
                {
                    teamMemberInfo.prev().show();
                    $('#mac-img-members').css('background-image',`url(../${imgSrc})`);
                });
            }
        };

        let nextTeamMember = () =>
        {
            let teamMemberInfo = $('.teamMemberInfo:visible');
            let counter = teamMemberInfo.data().counter;
            let totalCount = $('.teamMemberInfo').length-1;
            if(counter!==totalCount)
            {
                let imgSrc = teamMemberInfo.next().data().imgsrc;
                teamMemberInfo.fadeOut( "200", function()
                {
                    $('#mac-img-members').css('background-image',`url(../${imgSrc})`);
                    teamMemberInfo.next().show();
                });
            }
        }
    </script>
    <div class="row pt-5">
        <div class="col-md-1"></div>
        <div class="col-md-4 page-title">
            <h2 class="text-uppercase">Наша команда</h2>
        </div>
        <div class="col-md-7">
            <nav class="navbar navbar-expand-lg navbar-light float-lg-right">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav cap16">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">О нас </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Наша команда <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('ourHistory') }}">Наша история</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('vacancy') }}">Вакансия</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contacts') }}">Контакты и реквизиты</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div id="team-members" class="row pt-5 mb-5">
        <div class="col-1"></div>
        <div class="col-4 blue-back pl-0">
            <?php $counter = 0; ?>
                @foreach($teamMembers as $teamMember)
                    @if($counter===0)
                        <?php $visibility = 'display:block;'?>
                    @else
                        <?php $visibility = 'display:none;'?>
                    @endif
                <div class="container pt-5 pl-5 teamMemberInfo" data-counter="{{$counter}}" data-imgSrc="{{$teamMember->photo}}" style="{{$visibility}}">
                    <b class="cap20 member_position">{{$teamMember->position}}</b>
                    <h3 class="cap30 mt-3">
                        <span class="member_name">{{$teamMember->name}}</span>
                        <br>
                        <span class="member_surname">{{$teamMember->surname}}</span>
                    </h3>
                    <p class="cap14 mt-4 member_about">{{$teamMember->about}}</p>
                </div>
                    <?php $counter ++ ?>
                @endforeach
            <div class="nav-btn mt-5 ourTeam-next-prev">
                <button class="btn left mr-0 rounded-0 float-left" onclick="prevTeamMember()">
                    <img src="{{ asset('img/arrow-left.png') }}">
                </button>
                <button class="btn right ml-0 rounded-0 border-bottom float-left" onclick="nextTeamMember()">
                    <img src="{{ asset('img/arrow-right.png') }}">
                </button>
            </div>
        </div>
        <div class="col-6">
            @if(isset($teamMembers[0]))
                @php $imgsrc = "background-image: url('../".$teamMembers[0]->photo."')";  @endphp
            @else
                <?php $imgsrc = ''?>
            @endif
            <div id="mac-img-members" style="{{$imgsrc}}" class="pl-5">
            </div>
        </div>
        <div class="col-1"></div>
    </div>
    @include('components.footer')

@endsection