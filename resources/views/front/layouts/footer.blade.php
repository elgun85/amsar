<!--footer-starts-->


<div class="footer">
    <div class="container">
        <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">

                @php

                    $socials=['facebook','instagram','youtube'];
                @endphp
                @foreach($socials as $social)
                    @if ($config->$social!=null)

                        <li class="list-inline-item">
                            <a target="_blank" href="{{ $config->$social }}">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fa fa-{{ $social }} "></i>
                </span>
                            </a>
                        </li>

                    @endif
                @endforeach
            </ul>
        </div>
        <div class="footer-text">


            <p>  {{$config->title}}  © {{date('Y')}}   </p>
        </div>
    </div>
</div>
<!--footer-end-->
</body>
</html>



