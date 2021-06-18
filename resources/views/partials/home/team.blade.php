<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            <h2>
                @php
                    $title1 = str_replace('(', '<span>', $title->titleHome4);
                    $title2 = str_replace(')', '</span>', $title1);
                    echo $title2;      
                @endphp
            </h2>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="member">
                    <img src="img/team/{{$membre[0]->img}}" alt="">
                    <h2>{{$membre[0]->name}}</h2>
                    <h3>{{$membre[0]->job->job}}</h3>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="member">
                    <img src="img/team/{{$ceo[0]->img}}" alt="">
                    <h2>{{$ceo[0]->name}}</h2>
                    <h3>{{$ceo[0]->job->job}}</h3>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="member">
                    <img src="img/team/{{$membre[1]->img}}" alt="">
                    <h2>{{$membre[1]->name}}</h2>
                    <h3>{{$membre[1]->job->job}}</h3>
                </div>
            </div>            
        </div>
    </div>
</div>