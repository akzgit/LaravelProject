@include('layouts.header')
@include('layouts.navbardash')
@include('layouts.sidebardash')
{{--  <div class="container">
    <div class="row job-tiles">
        @foreach($jobs as $job)
            <div class="col-md-3 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $job->title }}</h5>
                        <p class="card-text">{{ $job->description }}</p>
                        <a href="{{ route('apply', $job->id) }}" class="btn btn-primary">Apply Now</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>  --}}
@include('layouts.footer')
{{--  <script>
    // JavaScript to handle the popup
    const applyButtons = document.querySelectorAll('.apply-btn');
    const successPopup = document.getElementById('successPopup');
    const closePopup = document.getElementById('closePopup');

    applyButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            e.preventDefault();
            successPopup.style.display = 'block';
        });
    });

    closePopup.addEventListener('click', () => {
        successPopup.style.display = 'none';
    });
</script>  --}}
