@include('header')
@include('navbar')

<div class="container">
    <div class="row mt-5">
        <div class="col d-flex justify-content-center">
            <div class="card p-5">
                <h5 class="card-header text-center">نتیجه آزمونک</h5>
                <div class="card-body text-center">
                    <p class="card-text">

                        پاسخ درست شما  

                        {{ $total_score }}
                            
                        از بین  
 
                        {{ $number_of_questions }}

                        سوال

                    </p>
                    <p class="card-text">

                        @if($total_score == $number_of_questions)

                            <p class="fw-bolder"> معرکه بوووود😍🤩</p>

                        @elseif($total_score >= $number_of_questions / 2)

                            <p class="fw-bolder"> خوب بود😊🙌🏻</p>

                        @else

                            <p class="fw-bolder"> تلاش بیشتری لازم داریاااا😁</p>

                        @endif  

                    </p>
                    <a href="/" class="btn btn-dark mt-3">بازگشت به صفحه اصلی</a>
                </div>
            </div>
        </div>
    </div>
</div>


@include('footer')
