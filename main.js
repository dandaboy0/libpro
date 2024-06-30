function find() {
    var vals=$("input").map(function(){return $(this).val();}).get()
    $.ajax({type:"post",
    data:{   },
    url:"savest.php",
    success:function(json){alert(json)}
    });
}
