<textarea class="form-control richTextBox" name="{{ $row->field }}" id="richtext{{ $row->field }}">
    {{ old($row->field, $dataTypeContent->{$row->field} ?? '') }}

</textarea>

@push('javascript')
    <script>
        $(document).ready(function () {
            var additionalConfig = {
                selector: 'textarea.richTextBox[name="{{ $row->field }}"]',
                @if(config('app.locale')==='zh_CN')
                language_url: "{{ voyager_asset('js/zh_CN.js') }}",
                language: 'zh_CN',//注意大小写
                @endif
            }
            $.extend(additionalConfig, {!! json_encode($options->tinymceOptions ?? '{}') !!})

            tinymce.init(window.voyagerTinyMCE.getConfig(additionalConfig));
        });
    </script>
@endpush
