<script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: 'textarea#myeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE
        plugins: 'code table lists',
        toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
    });
    tinymce.init({
        selector: 'textarea#showText',
        plugins: 'pageembed code preview',
        toolbar: 'pageembed code preview',
        menubar: 'view',
        tiny_pageembed_classes: [{
                text: 'Big embed',
                value: 'my-big-class'
            },
            {
                text: 'Small embed',
                value: 'my-small-class'
            }
        ],
        height: 500,
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
    });
</script>
