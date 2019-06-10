$('#msg').hide();
$('#addProd').click(function(){
    
    var pname = $('#pname').val();
    var pcode = $('#pcode').val();
    var price = $('#price').val();
    var cat_id = $('#cat_id').val();
    var token = $('#token').val();
    $.ajax({
        type: 'post',
        data:"pname=" + pname + "&pcode=" + pcode + "&price=" + price +"&cat_id=" + cat_id + "&_token=" + token,
        url: "/admin/prodSave",
        success:function(data){
            $('#msg').show();
        }
    });


});
 var refresh = setInterval(
    function(){
        $('#products').load('/admin/allProduct').fadeIn('slow');
    },1000);

    $('#cat_id').select2();

// edit product added
    $('#msgupdate').hide();
    $('#editProd').click(function(){
        
        var pname = $('#pname').val();
        var pcode = $('#pcode').val();
        var price = $('#price').val();
        var pid = $('#pid').val();
        var token = $('#token').val();

        $.ajax({
            type: 'post',
            data:"id=" + pid + "&pname=" + pname + "&pcode=" + pcode + "&price=" + price + "&_token=" + token,
            url: "/admin/editProduct",
            success:function(data){
                $('#msgupdate').show();
            }
        });
    
    
    });
    


// category 

$('#msgcat').hide();
$('#addCat').click(function(){
    
    var cname = $('#cname').val();
    var token = $('#token').val();
    $.ajax({
        type: 'post',
        data:"cname=" + cname + "&_token=" + token,
        url: "/admin/catSave",
        success:function(data){
            $('#msgcat').show();
        }
    });


});
var refresh = setInterval(
    function(){
        $('#cats').load('/admin/allCat').fadeIn('slow');
    },1000);




    $('#msgcat').hide();
    $('#editCat').click(function(){
        
        var cname = $('#cname').val();
        var cid = $('#cid').val();
        var token = $('#token').val();

        $.ajax({
            type: 'post',
            data:"id=" + cid + "&cname=" + cname + "&_token=" + token,
            url: "/admin/editCat",
            success:function(data){
                $('#msgcat').show();
            }
        });
    
    
    });








