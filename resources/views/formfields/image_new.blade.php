<div style="width: {{$options->width ?? 200}}px;">
    <div>
        <img width="{{$options->width ?? 200}}"
             @if($dataTypeContent->{$row->field}??false)
             src="/storage/{{ old($row->field, $dataTypeContent->{$row->field} ?? $options->default ?? '') }}"
             @endif
             id="{{$row->field}}img"
             alt="{{ old($row->field, $dataTypeContent->{$row->field} ?? $options->default ?? '') }}">
    </div>
    <div class="layui-progress" lay-showpercent="yes" lay-filter="{{$row->field}}pro">
        <div class="layui-progress-bar" lay-percent=""></div>
    </div>
</div>
<input @if($row->required == 1) required @endif type="text" class="form-control" name="{{ $row->field }}"
       placeholder="{{ old($row->field, $options->placeholder ?? $row->getTranslatedAttribute('display_name')) }}"
       {!! isBreadSlugAutoGenerator($options) !!}
       value="{{ old($row->field, $dataTypeContent->{$row->field} ?? $options->default ?? '') }}">
<div class="layui-btn-container">
    <a class="layui-btn demoMore"
       data-field="{{$row->field}}"
       lay-data="{url: '/admin/upload',field:'image',headers:{
       _token:'{{csrf_token()}}'
       },data:{type_slug:'{{$dataType->slug}}'}}"
    >图像上传</a>
</div>