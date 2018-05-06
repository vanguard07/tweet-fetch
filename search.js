function checkBox() {
    if(document.getElementById('query')) {
        var x = document.getElementById('query').value.length;
        var form = document.getElementById('form');
        if (x != 0) {
            // $.ajax({
            //     url: 'index.php',
            //     type: 'POST',
            //     data: {
            //         hashtag: $("#query").value
            //     },
            //     success: function(msg) {
            //
            //     }
            // });
            form.submit();
        }
    }
}
checkBox();
