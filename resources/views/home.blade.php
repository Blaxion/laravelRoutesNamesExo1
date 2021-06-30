@extends('layout.index')
@section('body')
    <div class="container text-center mt-5">
        <h1>PRESENTATION</h1>
    <p>This website was made for the hardworkers that are our's SHEMADEBEANS collaborators and DOGE designers. Together they can dive way behond the limits of your wallet and fart even further!!!!!</p>
    </div>
    <h2 class='text-center mt-5'>FRONT Staff</h2>
    <div class="row text-center">
        @foreach ($front as $perso)
            @if ($loop->iteration < 4)
                <div class="col-4 px-0">
                    <div class="card m-auto" style="width: 18rem;">
                        <img src="{{ $perso['chemin'] }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $perso['nom'] }}</h5>
                            <p class="card-text">{{ $perso['fonction'] }}</p>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>

    <h2 class='text-center mt-5'>BACK Staff</h2>
    <div class="row text-center">
        @foreach ($back as $perso)
            @if ($loop->iteration < 4)
                <div class="col-4 px-0">
                    <div class="card m-auto" style="width: 18rem;">
                        <img src="{{ $perso['chemin'] }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $perso['nom'] }}</h5>
                            <p class="card-text">{{ $perso['fonction'] }}</p>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>

    
    <form>
        <div class="container w-50 mt-5">
            <h2 class='text-center'>Contact</h2>
            <!-- Name input -->
            <div class="form-outline mb-4">
                <input type="text" id="form4Example1" class="form-control" />
                <label class="form-label" for="form4Example1">Name</label>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="email" id="form4Example2" class="form-control" />
                <label class="form-label" for="form4Example2">Email address</label>
            </div>

            <!-- Message input -->
            <div class="form-outline mb-4">
                <textarea class="form-control" id="form4Example3" rows="4"></textarea>
                <label class="form-label" for="form4Example3">Message</label>
            </div>

            <!-- Checkbox -->
            <div class="form-check d-flex justify-content-center mb-4">
                <input class="form-check-input me-2" type="checkbox" value="" id="form4Example4" checked />
                <label class="form-check-label" for="form4Example4">
                    Send me a copy of this message
                </label>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>

        </div>
    </form>
@endsection
