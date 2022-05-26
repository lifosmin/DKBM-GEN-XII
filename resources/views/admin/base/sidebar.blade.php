<div class="sidebar-admin d-flex flex-column justify-content-between">
    <div class="sidebar-header flex-column d-flex justify-content-center align-items-center" data-bs-toggle="tooltip"
        data-bs-placement="right" title="Punten ges">
        <iframe src="https://embed.lottiefiles.com/animation/73225"></iframe>
        <p>ECO 2022</p>
    </div>

    <div class="sidebar-body flex-column d-flex justify-content-center align-items-center gap-3">
        <div class="sidebar-items py-1 position-relative" data-bs-toggle="tooltip" data-bs-placement="right"
            title="Aspirasi Pending">
            @if($pendingCount)
              <span class="position-absolute top-25 start-100 translate-middle badge rounded-pill bg-danger"
                style="z-index:1">
                {{ $pendingCount }}
                <span class="visually-hidden">unread messages</span>
            </span>
            @endif
            <a href="{{ route('admin') }}">
                <lottie-player src="https://assets5.lottiefiles.com/private_files/lf30_qhmjozme.json"
                    background="transparent" speed="1" style="width: 50px; height: 50px;" loop autoplay></lottie-player>
            </a>
        </div>

        <div class="sidebar-items py-1 position-relative" data-bs-toggle="tooltip" data-bs-placement="right"
            title="Aspirasi On Progress">
            @if($onProgressCount)
              <span class="position-absolute top-25 start-100 translate-middle badge rounded-pill bg-danger"
                style="z-index:1">
                {{ $onProgressCount }}
                <span class="visually-hidden">unread messages</span>
            </span>
            @endif

            <a href="{{ route('adminOnProgress') }}">
                <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_cjy4zhdi.json"
                    background="transparent" speed="1" style="width: 50px; height: 50px;" loop autoplay></lottie-player>
            </a>
        </div>
        <div class="sidebar-items py-1 position-relative" data-bs-toggle="tooltip" data-bs-placement="right"
            title="Aspirasi Finished">
            @if($finishedCount)
              <span class="position-absolute top-25 start-100 translate-middle badge rounded-pill bg-danger"
                  style="z-index:1">
                  {{ $finishedCount }}
                  <span class="visually-hidden">unread messages</span>
              </span>
            @endif

            <a href="{{ route('adminFinished') }}">
                <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_e4lyxm13.json"
                    background="transparent" speed="1" style="width: 50px; height: 50px;" loop autoplay></lottie-player>
            </a>
        </div>

        <div class="sidebar-items py-1 position-relative" data-bs-toggle="tooltip" data-bs-placement="right" title="Data User">
            <span class="position-absolute top-25 start-100 translate-middle badge rounded-pill bg-dark"
                style="z-index:1">
                {{ $userCount }}
                <span class="visually-hidden">unread messages</span>
            </span>

            <a href="{{ route('dataUser') }}">
                <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_yravkfyg.json"
                    background="transparent" speed="1" style="width: 50px; height: 50px;" loop autoplay></lottie-player>
            </a>
        </div>
    </div>

    <form action="{{ route('logoutAdmin') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-primary d-block mx-auto"><i
                class="bi bi-box-arrow-right"></i>Logout</button>
    </form>

    <div class="sidebar-footer d-flex justify-content-center align-items-center">
        <div class="text-content">
            &copy ORTA 2022
        </div>
    </div>
</div>
