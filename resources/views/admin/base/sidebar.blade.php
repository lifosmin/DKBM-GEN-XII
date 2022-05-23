<div class="sidebar-admin d-flex flex-column justify-content-between">
    <div class="sidebar-header flex-column d-flex justify-content-center align-items-center"data-bs-toggle="tooltip" data-bs-placement="right" title="Punten ges" > 
        <iframe src="https://embed.lottiefiles.com/animation/73225"></iframe>
        <p>ECO 2022</p>
    </div>

    <div class="sidebar-body flex-column d-flex justify-content-center align-items-center">
        <div class="sidebar-items py-1" data-bs-toggle="tooltip" data-bs-placement="right" title="Aspirasi Pending">
            <a href="{{ route('admin') }}"><img  src="{{ asset('img/1 (1).png') }}" alt=""></a>
        </div>
        <div class="sidebar-items py-1" data-bs-toggle="tooltip" data-bs-placement="right" title="Aspirasi On Progress">
            <a href="{{ route('adminOnProgress') }}"><img src="{{ asset('img/1 (1).png') }}" alt=""></a>
        </div>
        <div class="sidebar-items py-1" data-bs-toggle="tooltip" data-bs-placement="right" title="Aspirasi Finished">
            <a href="{{ route('adminFinished') }}"><img src="{{ asset('img/1 (1).png') }}" alt=""></a>
        </div>
        <div class="sidebar-items py-1" data-bs-toggle="tooltip" data-bs-placement="right" title="Data User">
            <a href="{{ route('dataUser') }}"><img src="{{ asset('img/1 (1).png') }}" alt=""></a>
        </div>
    </div>

    <form action="{{ route('logoutAdmin') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-primary d-block mx-auto"><i class="bi bi-box-arrow-right"></i>Logout</button>
    </form>

    <div class="sidebar-footer d-flex justify-content-center align-items-center">
        <div class="text-content">
            &copy ORTA 2022
        </div>
    </div>
</div>