@extends('layouts.app')

@section('body')
    <section class="bg-gray pt-4 pb-5">
        <div class="container">
            <div class="mb-5">
                <div class="d-flex align-items-center">
                    <div class="d-flex">
                        <div class="fs-2 fw-bold me-2 mb-0">
                            Answer A Question
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-8 mb-5 mb-lg-0" >
                    <div class="card card-discussions mb-5">
                        <div class="row">
                            <div class="col-12">
                                <form action="" method="POST">
                                    <div class="mb-3">
                                        <label for="answers" class="form-label">Answers</label>
                                        <textarea class="form-control" id="answers" name="answers" autofocus></textarea>
                                    </div>
                                    <div>
                                        <button class="btn btn-primary me-4" type="submit">Submit</button>
                                        <a href="#">Cancel</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('after-script')
<script>
    $(document).ready(function() {
        $('#answers').summernote({
            placeholder: 'Your Solusion in here bro',
            tabSize: 2,
            height: 320,
            toolbar: [  
                ['style',['style']],
                ['font',['bold','italic','underline','clear']],
                ['color',['color']],
                ['para',['ul','ol','paragraph']],
                ['table',['table']],
                ['insert',['link','picture','video']],
                ['view',['fullscreen','codeview','help']],
            ]
        })
    });

    $('span-note-icon-caret').remove();
</script>

@endsection