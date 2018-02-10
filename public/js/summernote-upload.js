$('.summer').summernote({
    height: "200px",
    callbacks: {
        onImageUpload: function(files) {
            url = '/api/upload-image' //path is defined as data attribute for  textarea
            sendFile(files[0], url, $(this));
        }
    }
});

function sendFile(file, url, editor) {
    var data = new FormData();
    data.append("image", file);
    $.ajax({
        url: url,
        cache: false,
        contentType: false,
        processData: false,
        data: data,
        type: "post",
        success: function(resp) {
            editor.summernote('insertImage', resp);
        },
        error: function(data) {
            console.log(data);
        }
    });
}