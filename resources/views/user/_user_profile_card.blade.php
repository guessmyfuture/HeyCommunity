<div class="card card-profile mb-4">
    <div class="card-header" style="background-image: url({{ asset('assets/bootstrap-application-theme/img/iceland.jpg') }});"></div>
    <div class="card-body text-center">
        <a href="{{ route('user.uhome', $user->id)  }}">
            <img class="card-profile-img" src="{{ asset($user->avatar) }}">
        </a>

        <h6 class="card-title">
            <a class="text-inherit" href="{{ route('user.uhome', $user->id) }}">{{ $user->nickname }}</a>
        </h6>

        <p class="mb-4">{{ $user->bio }}</p>
    </div>
</div>