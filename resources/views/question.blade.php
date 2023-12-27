@include('header')
@include('navbar')

<div class="container">
    <div class="row mt-5">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title"> 
                        سوال

                        {{ $question->id }}

                        از

                        {{ $number_of_questions }}

                    </h5>
                </div>
                <div class="card-body">
                    <p class="card-text">

                        {{$question->text}}

                    </p>
                    <form action="/check-answer" method="post">
                                
                        @foreach($question->answers as $answer)
                                    
                            <div class="form-check">
                                <p>
                                    <input type="radio" name="answer" value="{{ $answer->id }}">
                                        {{$answer->text}}
                                </p>
                                <label class="form-check-label" for="flexRadioDefault1"></label>
                            </div>

                        @endforeach 

                        <input type="hidden" name="question_id" value="{{ $question->id }}" >
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                    
                        <button type="submit" class="btn btn-dark mt-3">بعدی</button>
                            
                </div>
            </div>
        </div>
    </div>
</div>

@include('footer')
