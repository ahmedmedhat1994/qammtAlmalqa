@extends('Backend.layout.master')
@section('title')
    المقالات
@endsection
@section('css')

@endsection
@section('content')
    <div class="container-xl wide-xl">
        <div class="nk-content-body">
            <div class="nk-block nk-block-lg">
                <div class="nk-block-head">
                    <div class="nk-block-head-content">
                        <h4 class="title nk-block-title">انشاء مقال</h4>
                        <div class="nk-block-des">
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-inner">
                        <form method="post" action="{{route('admin.blog.store')}}" class="form form-validate"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="row g-gs">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label"
                                               for="fv-full-name">العنوان</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="fv-full-name" name="headline"
                                                   value="{{old('headline')}}" required>
                                        </div>
                                    </div>
                                    @error('headline')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label"
                                               for="fv-full-name">التصنيف</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="fv-full-name" name="category"
                                                   value="{{old('category')}}" required>
                                        </div>
                                    </div>
                                    @error('category')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="customFileLabel">الصورة</label>
                                        <div class="form-control-wrap">
                                            <div class="form-file">
                                                <input type="file" class="form-file-input" id="customFile" name="cover">
                                                <label class="form-file-label" for="customFile">اختر صورة</label>
                                            </div>
                                        </div>
                                    </div>
                                    @error('cover')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label"
                                           for="fv-full-name">المحتوي</label>
                                    <div class="form-group">
                                        <textarea class="summernote-basic"
                                                  name="contentIs">{{old('contentIs')}}</textarea>
                                    </div>
                                    @error('contentIs')<span class="text-danger">{{ $message }}</span>@enderror

                                </div>



                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="submit"
                                                class="btn btn-lg btn-primary">نشر</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- .nk-block -->
        </div>
    </div>

@endsection
@section('script')


    {{--        <script>--}}
    {{--            var uploadedDocumentMap = {}--}}
    {{--            Dropzone.options.documentDropzone = {--}}
    {{--                paramName: "dzfile",--}}
    {{--            url: '{{ route('admin.products_upload_images') }}',--}}
    {{--            maxFilesize: 2, // MB--}}
    {{--            addRemoveLinks: true,--}}

    {{--            headers: {--}}
    {{--            'X-CSRF-TOKEN': "{{ csrf_token() }}"--}}
    {{--        },--}}
    {{--            success: function (file, response) {--}}
    {{--            $('form').append('<input type="hidden" name="document[]" value="' + response.name + '">')--}}
    {{--            uploadedDocumentMap[file.name] = response.name--}}
    {{--        },--}}
    {{--            removedfile: function (file) {--}}
    {{--            file.previewElement.remove()--}}
    {{--            var name = ''--}}
    {{--            if (typeof file.file_name !== 'undefined') {--}}
    {{--            name = file.file_name--}}
    {{--        } else {--}}
    {{--            name = uploadedDocumentMap[file.name]--}}
    {{--        }--}}
    {{--            $('form').find('input[name="document[]"][value="' + name + '"]').remove()--}}
    {{--        },--}}
    {{--            init: function () {--}}
    {{--            @if(isset($project) && $project->document)--}}
    {{--            var files =--}}
    {{--            {!! json_encode($project->document) !!}--}}
    {{--            for (var i in files) {--}}
    {{--            var file = files[i]--}}
    {{--            this.options.addedfile.call(this, file)--}}
    {{--            file.previewElement.classList.add('dz-complete')--}}
    {{--            $('form').append('<input type="hidden" name="document[]" value="' + file.file_name + '">')--}}
    {{--        }--}}
    {{--            @endif--}}
    {{--        }--}}
    {{--        }--}}
    {{--    </script>--}}

@endsection
