
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdn.ckeditor.com/4.9.2/full/ckeditor.js"></script>
    <script>
        $(".ckeditor").each(function () {
            let id = $(this).attr('id');
            CKEDITOR.replace(id);
        });
        $(document).ready(function () {
            $("#validateForm").validate({
                rules: {
                    @foreach($inputs as $in)
                        {{($in['required'] == true) ? $in['name'] : ''}}: {
                        required: true,
                    },
                    @endforeach

                },
                messages: {
                    @foreach($inputs as $in)
                        @if($in['required'] == true)
                        {{$in['name']}}: {
                        required: "الحقل مطلوب",
                    },
                    @endif
                    @endforeach


                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            if (window.File && window.FileList && window.FileReader) {
                @foreach($inputs as $input)
                @if($input['type'] == 'file')
                $("#{{$input['name']}}").on("change", function(e) {
                    var files = e.target.files,
                        filesLength = files.length;
                    for (var i = 0; i < filesLength; i++) {
                        var f = files[i]
                        var fileReader = new FileReader();
                        fileReader.onload = (function(e) {
                            var file = e.target;
                            $('.preview{{$input['name']}} img').attr('src', e.target.result);
                        });
                        fileReader.readAsDataURL(f);
                    }
                });
                @endif
                @endforeach
            } else {

            }
        });
    </script>
@endpush
