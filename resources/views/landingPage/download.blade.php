<x-userLayout>
   <div class="container text-center">
    <a class="navbar-brand" href="/home">
        <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
    </a>
        <div class="row p-5 bg-dark" >

          <div class="col-12 col-md-6 text-center  p-5">
            <div class="card text-center">
                <a href="#" class="w-20 h-20 fill-current">
                    <img src="{{asset('assets/GooglePlay.png')}}" width="300" height="auto" class=" mx-auto d-block" alt="Play Store">
                </a>

            </div>
          </div>
          <div class="col-12 col-md-6 text-center  p-5">
            <div class="card text-center">
                <a href="#" class="w-20 h-20 fill-current">
                    <img src="{{asset('assets/Apple store.png')}}"width="300" height="auto" class="mx-auto d-block" alt="Apple Store">
                </a>

            </div>
          </div>
        </div>
    </div>


</x-userLayout>
