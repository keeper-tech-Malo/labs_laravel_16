<div class="contact-section spad fix">
    <div class="container">
        <div class="row">
            <!-- contact info -->
            <div class="col-md-5 col-md-offset-1 contact-info col-push">
                <div class="section-title left">
                    <h2>Contact us</h2>
                </div>
                <p>{{$contact->description}}</p>
                <h3 class="mt60">{{$contact->building}}</h3>
                <p class="con-item">{{$contact->street}}<br> {{$contact->postcode}} {{$contact->city}} </p>
                <p class="con-item">{{$contact->number}}</p>
                <p class="con-item">{{$contact->email}}</p>
            </div>
            <!-- contact form -->
            <div class="col-md-6 col-pull">
                <form class="form-class" id="con_form" method="POST" action="{{route('contactform')}}">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" name="name" id="name" placeholder="Your name">
                        </div>
                        <div class="col-sm-6">
                            @guest 
                                <input type="text" name="mail" placeholder="Your email">
                            @endguest
                            @auth
                                <input type="text" name="mail" placeholder="Your email" value={{Auth::user()->email}}>
                            @endauth
                        </div>
                        <div class="col-sm-12">
                            <select name="subject" id="subject" placeholder="subject">
                                @foreach ($subjects as $subject)
                                    <option value="{{$subject->subject}}">{{$subject->subject}}</option>
                                @endforeach
                            </select>
                            <textarea name="message" placeholder="Your message..." name="message" id="message"></textarea>
                            <button class="site-btn">send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>