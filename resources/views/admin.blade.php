@include('header')
@include('navbar')

<div class="container">
    <div class="row mt-5">
        <div class="col ">
            <div class="card ">
                <div class="card-body">
                    به پنل ادمین خوش اومدی ☘️
                    <br>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-dark mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <img src="Images/add_green.webp" alt="logo" width="25" height="20" class="d-inline-block align-text-top">
                        افزودن سوال جدید
                    </button>
                     

                    <!-- Modal -->
                    <div class="modal fade " style=" background-color: #CCD1C7;" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog ">
                            <div class="modal-content bg-dark text-light p-3">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">سوال جدید</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                            <div class="modal-body" >

                            <form method="post" action="/add_question">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">متن سوال</label>
                                    <input type="text"  name="question_text" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" style="border-radius: 30px;box-shadow:inset -4px -4px 4px #fff,inset  4px 4px 4px  rgba(0,0,0,0.3);">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">گزینه ها</label>
                                        <ul id="my_list" style="list-style-type:none;">

                                            <input type="text" name="answer[]"  multiple="multiple"  class="form-control inputs" id="exampleInputEmail1" aria-describedby="emailHelp" > 
                                            <input type="text" name="answer[]"  multiple="multiple"  class="form-control inputs" id="exampleInputEmail1" aria-describedby="emailHelp" > 
                                            
                                        </ul>

                                        <button type="button" class="mt-3 bg-light btns" onclick="bache_jadid()">+</button>
                                        <button type="button" class="bg-light btns" onclick="remove_jadid()" >-</button>
                                            
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label mt-3">پاسخ درست</label>
                                            <input type="text"  name="true_answer" class="form-control inputs" id="exampleInputEmail1" aria-describedby="emailHelp" >
                                        </div>

                                            
                                    </div>

                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <button type="submit" class="btn btn-light mt-3" id="submit" style="margin-right:150px;width:130px;">فرستادن</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@include('footer')



