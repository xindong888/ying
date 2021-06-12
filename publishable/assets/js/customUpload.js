window.onload = function () {
    layui.use(['upload', 'element', 'layer'], function () {
        var $ = layui.jquery
            , upload = layui.upload
            , element = layui.element
            , layer = layui.layer;
        //同时绑定多个元素，并将属性设定在元素上
        upload.render({
            elem: '.demoMore'
            ,choose: function(obj){
                var field = $(this.item[0]).attr('data-field');
                element.progress(field + 'pro', '0%'); //可配合 layui 进度条元素使用
            }
            //上传前
            , before: function () {

            }
            //进度条
            , progress: function (n, elem, e) {
                var field = $(this.item[0]).attr('data-field');

                element.progress(field + 'pro', n + '%'); //可配合 layui 进度条元素使用
                if (n == 100) {
                    layer.msg('上传完毕', {icon: 1});
                }
            }
            , done: function (res, index, upload) {
                var field = $(this.item[0]).attr('data-field');
                $('#' + field + 'img').attr('src', "/storage/" + res.path);
                $('input[name=' + field + ']').val(res.path);
                console.log(field); //获取当前触发上传的元素，layui 2.1.0 新增
            }
        })
    })
}