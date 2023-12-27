@include('header')
@include('navbar')

<div class="container">
    <div class="row mt-5">
        <div class="col">
            <div class="card">
                <h5 class="card-header">به آزمونک خوش اومدی😍</h5>
                <div class="card-body">
                    <p class="card-text">
                        تعداد سولات آزمون

                        {{ $number_of_questions }}

                        تا می باشد

                    </p>
                    <p class="card-text">
                        مدت زمان آزمون :
                            
                        {{ $number_of_questions / 2 }}

                        دقیقه
                    </p>
                    <a href="/question/1" class="btn btn-dark">بززززن بریمممم 👊🏻</a>
                </div>
            </div>
        </div>
    <div>
</div>

@include('footer')